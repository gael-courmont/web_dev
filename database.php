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
    function getansweridbyText($answer_text){
        $params=array('answer_text'=>$answer_text);
        $query='select answer_id from answer where answer.answer_text=:answer_text';
        return executeQuery($query,$params);
    }

    function isAnswerRight($QuestionID){
        $params=array('answer_question_ID' => $QuestionID);
        $query='select answer_id from answer where answer.is_valid_answer=1 and answer.answer_question_id= :answer_question_ID';
        return executeQuery($query,$params);
        
    }
    function addUserAnswer($user_id,$answerid,$answer_date){
        $params=array('user_id'=>$user_id,'answer_id'=>$answerid,'user_answer_date'=>$answer_date);
        $query='insert into user_answer(user_id,answer_id,user_answer_date) VALUES (:user_id, :answer_id, :user_answer_date)';
        return executeQuery($query,$params);
    }

    function addAnswerByQuestID($question_id,$answer_text,$is_valid_answer){
        $params=array('question_id'=>$question_id,'answer_text'=>$answer_text,'is_valid_answer'=>$is_valid_answer);
        $query='insert into answer(answer_text,is_valid_answer,answer_question_id) VALUES (:answer_text, :is_valid_answer, :question_id)';
        return executeQuery($query,$params);
    }
    function getUserAnswerbyAnsweridclientid($user_id,$answer_id){
        $params=array('user_id'=>$user_id,'answer_id'=>$answer_id);
        $query='select * from user_answer where answer_id=:answer_id and user_id=:user_id';
        return executeQuery($query,$params);
    }

    function getQuizzbyUseranswerid($user_answer_id){
        $params=array('user_answer_id'=>$user_answer_id);
        $query='select quizz_name,quizz_id FROM (((answer inner join user_answer on answer.answer_id=user_answer.answer_id ) inner join question on question.question_id=answer.answer_question_id) inner join quizz on question.question_quizz_id=quizz.quizz_id) where user_answer.user_id=:user_answer_id group by quizz_name';
        return executeQuery($query,$params); 
    }
    function getGoodAnswerbyUserIDandquizz($user_id,$quizz_id){
        $params=array('user_id'=>$user_id,'quizz_id'=>$quizz_id);
        $query='select * from (answer inner join user_answer on answer.answer_id=user_answer.answer_id) inner join question on question.question_id=answer.answer_question_id where answer.is_valid_answer=1 and user_answer.user_id=:user_id and question.question_quizz_id=:quizz_id group by answer.answer_id ';
        return executeQuery($query,$params);
    }
    function getAllQuizzDone($user_id){
        $params=array('user_id'=>$user_id);
        $query='select quizz_id,quizz_name from (((user_answer inner join answer on user_answer.answer_id=answer.answer_id) inner join question on question.question_id=answer.answer_question_id) inner join quizz on quizz.quizz_id=question.question_quizz_id) where user_answer.user_id=:user_id group by quizz.quizz_id';
        return executeQuery($query,$params);
    }
    function getAllGoodAnswerByQuizzId($quizz_id){
        $params=array('quizz_id'=>$quizz_id);
        $query='select answer_text,question_title from (answer inner join question on answer.answer_question_id=question.question_id) inner join quizz on question.question_quizz_id=quizz.quizz_id where quizz_id=:quizz_id and is_valid_answer=1';
        return executeQuery($query,$params);
    }
    function deleteUserAnswerByQuizzIdandUserId($quizz_id,$user_id){
        $params=array('quizz_id'=>$quizz_id,'user_id'=>$user_id);
        $query='delete user_answer from (user_answer inner join answer on answer.answer_id=user_answer.answer_id) inner join question on question.question_id=answer.answer_question_id where question.question_quizz_id=:quizz_id and user_id=:user_id';
        return executeQuery($query,$params);
    }
    function getAllUserForQuizzid($quizz_id){
        $params=array('quizz_id'=>$quizz_id);
        $query ='select user.user_id,user_first_name,user_last_name FROM (((user inner join user_answer on user_answer.user_id=user.user_id) inner join answer on answer.answer_id=user_answer.answer_id) inner join question on question.question_id=answer.answer_question_id ) inner join quizz on quizz.quizz_id=question_quizz_id where quizz.quizz_id=:quizz_id group by user.user_id';
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