<?php

use app\models\Registration;

?>
<div class="container">
 
<h2>Register courses</h2>
<ul>
    <?php foreach($courses as $course):?>

        <?php if( !Registration::findOne(["student_id"=>$_SESSION["user"]->id, "course_id"=>$course->id])):?>
            <li><span><?=$course->code?></span> <span><?=$course->Title?></span> <a href=<?="/course/register?course_id=".$course->id?>><button>Register</button></a></li>
        <?php endif;?>
    <?php endforeach;?>

</ul>
</div>