<?php

namespace Games\model;

use Games\model\Dbh;

class Comment extends Dbh
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

    public function create($content, $game_id, $user_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("INSERT INTO comments (content, game_id, user_id) VALUES (?, ?, ?)");
        $stmt->execute([$content, $game_id, $user_id]);
        return $this->$db->lastInsertId();
    }

    public function getById($comment_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE comment_id = ?");
        $stmt->execute([$comment_id]);
        return $stmt->fetch();
    }

    public function getAllByGameId($game_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE game_id = ?");
        $stmt->execute([$game_id]);
        return $stmt->fetchAll();
    }

    public function getAllByUserId($user_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("SELECT * FROM comments WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }

    public function update($comment_id, $content)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("UPDATE comments SET content = ? WHERE comment_id = ?");
        $stmt->execute([$content, $comment_id]);
        return $stmt->rowCount();
    }

    public function delete($comment_id)
    {
        $db = self::connectDB();
        $stmt = $db->prepare("DELETE FROM comments WHERE comment_id = ?");
        $stmt->execute([$comment_id]);
        return $stmt->rowCount();
    }
}
