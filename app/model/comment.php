<?php

namespace Games\model;

use PDO;
use PDOException;


class Comment
{
    private $comment_id;
    private $content;
    private $comment_date;
    private $game_id;
    private $user_id;

    public function __construct($comment_id, $content, $comment_date, $game_id, $user_id)
    {
        $this->comment_id = $comment_id;
        $this->content = $content;
        $this->comment_date = $comment_date;
        $this->game_id = $game_id;
        $this->user_id = $user_id;
    }

    public function getCommentId()
    {
        return $this->comment_id;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getCommentDate()
    {
        return $this->comment_date;
    }

    public function getGameId()
    {
        return $this->game_id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function save()
    {
        try {
            $db = Dbh::connectDB();
            $stmt = $db->prepare("INSERT INTO comments (content, comment_date, game_id, user_id) VALUES (:content, NOW(), :game_id, :user_id)");
            $stmt->bindParam(':content', $this->content);
            $stmt->bindParam(':game_id', $this->game_id);
            $stmt->bindParam(':user_id', $this->user_id);
            $stmt->execute();
            $this->comment_id = $db->lastInsertId();
            return true;
        } catch (PDOException $e) {
            echo "Erreur DB : " . $e->getMessage();
            return false;
        }
    }

    public static function getByGameId($game_id)
    {
        try {
            $db = Dbh::connectDB();
            $stmt = $db->prepare("SELECT * FROM comments WHERE game_id = :game_id ORDER BY comment_date DESC");
            $stmt->bindParam(':game_id', $game_id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $comments = array();
            foreach ($result as $row) {
                $comment = new Comment($row['comment_id'], $row['content'], $row['comment_date'], $row['game_id'], $row['user_id']);
                $comments[] = $comment;
            }
            return $comments;
        } catch (PDOException $e) {
            echo "Erreur DB : " . $e->getMessage();
            return null;
        }
    }
}
