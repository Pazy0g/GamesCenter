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
    }

    public static function getByGameId($game_id)
    {
    }
}
