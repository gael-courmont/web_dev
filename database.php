<?php
    function getAllQuizz(){
        $query ='select * from quizz';
        return executeQuery($query,null);
    }

    function getQuizzByName($QuizzName){
        $params=array('QuizzName' => $QuizzName);
<<<<<<< Updated upstream
        $query ='select quizz_id,quizz_name from quizz where quizz.quizz_name= :QuizzName';
        return executeQuery($query,$params);
    }

=======
        $query ='select * from quizz where quizz.Quizz_name= :QuizzName';
        return executeQuery($query,$params);
    }
    
>>>>>>> Stashed changes
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
    function getUserByName($name){
        $params=array('fname' => $name);
        $query ='select user_last_name,user_first_name from user where user_first_name= :fname';
        return executeQuery($query,$params);
    }

<<<<<<< Updated upstream
    function getAnswerByTextAndQuestionID($AnswerText,$questionID){
        $params=array('answer_text' => $AnswerText,'answer_question_id'=> $questionID);
        $query='select answer_text,is_valid_answer,answer_question_id from answer where answer.answer_text= :answer_text and answer.answer_question_id= :answer_question_id';
=======
    function getAnswerQuestionID($questionID){
        $params=array('answer_question_id'=> $questionID);
        $query='select answer_text,is_valid_answer,answer_question_id from answer where answer.answer_question_id= :answer_question_id';
>>>>>>> Stashed changes
        return executeQuery($query,$params);
    }

    function isAnswerRight($QuestionID){
        $params=array('answer_question_ID' => $QuestionID);
<<<<<<< Updated upstream
        $query='select is_valid_answer from answer where answer.is_valid_answer=1 and answer.answer_question_id= :answer_question_ID';
=======
        $query='select answer_text from answer where answer.is_valid_answer=1 and answer.answer_question_id= :answer_question_ID';
>>>>>>> Stashed changes
        return executeQuery($query,$params);
        
    }

    function executeQuery($query,$params){
        //connect to our quizz db
        $bdd=new PDO('mysql:hoost=localhost;dbname=quizzdb','root');
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