<?php
/**
 * Created by PhpStorm.
 * User: gnosis gnosis
 * Date: 10/28/2014
 * Time: 11:14 AM
 */

/*
Making a class for article here
*/
class Article
{
   private $articleTitle;
   private $article;
   private $subject;
   private $date;
   private $author;

public function  __construct ($newArticleTitle, $newArticle, $newSubject, $newDate, $newAuthor)  {
   try {
      $this->setarticleTitle($newArticleTitle);
      $this->setArticle($newArticle);
      $this->setSubject($newSubject);
      $this->setDate($newDate);
      $this->setAuthor($newAuthor);


   }  catch(UnexpectedValueException $unexpectedValue) {
         throw (new UnexpectedValueException ("Unable to construct Article Title", 0, $unexpectedValue));
}     catch (RangeException $range) {
      throw (new UnexpectedValueException ("Unable to construct Article Title", 0, $unexpectedValue));

   }
}
   public function get ArticleTitle ()  {
      return ($this->articleTitle);
}

public function set ArticleTitle ($newArticleTitle)  {

if ($newArticleTitle === null)  {
            $this->articleTitle = null;
            return;
}
}
   }
