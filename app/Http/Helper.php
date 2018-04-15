<?php

class Helper{

    public static function getStudentName($id)
    {
        return \App\User::find($id);
    }
}