

<div class="container">
 
<h2>Registered courses</h2>
<ul>
    <?php foreach($registrations as $registration):?>

        <li><span><?=$registration->course->code?></span> <span><?=$registration->course->Title?></span></li>
    <?php endforeach;?>

</ul>
</div>