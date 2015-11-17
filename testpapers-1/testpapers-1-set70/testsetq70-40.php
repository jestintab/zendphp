
<?php
class Content
{
   public function publish() {
      $this->published = true;
      $this->article();
      
      return true;
   }
   protected function article() {
      echo "<i>Article:</i>";
   }
}
class Article extends Content
{
   public function article() {
      echo "<i>Post:</i>";
   }
}
$post = new Article();
echo $post->publish();
?>

