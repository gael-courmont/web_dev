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
    function getFalseAnswerbyquestionid($questionid){
        $params=array('answer_question_id'=>$questionid);
        $query='select answer_id from answer where answer.answer_question_id= :answer_question_id and is_valid_answer=false';
    }

    function isAnswerRight($QuestionID){
        $params=array('answer_question_ID' => $QuestionID);
        $query='select answer_id from answer where answer.is_valid_answer=1 and answer.answer_question_id= :answer_question_ID';
        return executeQuery($query,$params);
        
    }
    function addUserAnswer($user_id,$answerid,$answer_date){
        $params=array('user_id'=>$user_id,'answer_id'=>$answerid,'user_answer_date'=>$answer_date);
        $query='insert into user_answer(user_id,answer_id,user_answer_date) VALUES (:user_id, :answer_id, :user_answer_date)';
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