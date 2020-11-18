<?php
    function getAllQuizz(){
        $query ='select * from quizz';
        return executeQuery($query,null);
    }

    function getQuestionByQuizzId($QuizzId){
        $params = array('quizzID' => $QuizzId);
        $query='select * from question where question_quizz_id= :quizzID';
        return executeQuery($query,$params);
    }

    function createUser($fname,$lname,$password){
        $params=array('user_last_name' => $lname,'user_first_name' => $fname, 'user_password' => $password);
        $query='insert into user(user_last_name,user_first_name,user_adress,user_phone,user_birthdate,user_password) VALUES (:user_last_name, :user_first_name,NULL, NULL, NULL,:user_password);';
        return executeQuery($query,$params);
    }
    function getUserByName($fname,$lname){
        $params=array('fname' => $fname,'lname'=>$lname);
        $query ='select * from user where user_first_name= :fname and user_last_name= :lname';
        return executeQuery($query,$params);
    }

    function getAnswerQuestionID($questionID){
        $params=array('answer_question_id'=> $questionID);
        $query='select * from answer where answer.answer_question_id= :answer_question_id';
        return executeQuery($query,$params);
    }
    function getAnswernamebyid($answerid){
        $params=array('answer_id' => $answerid);
        $query='select answer_text from answer where answer.answer_id= :answer_id';
        return executeQuery($query,$params);
        
    }

    function isAnswerRight($QuestionID){
        $params=array('answer_question_ID' => $QuestionID);
        $query='select answer_id from answer where answer.is_valid_answer=1 and answer.answer_question_id= :answer_question_ID';
        return executeQuery($query,$params);
        
    }

    function executeQuery($query,$params){
        $bdd=$GLOBALS['bdd'];
        //connect to our quizz db
        try{
            $res=$bdd->prepare($query);
            $res->execute($params);
            $data=$res->fetchAll();
            $res->closeCursor();
            return $data;
        }catch (PDOException $e){
            var_dump($e);
        }
    }
?>