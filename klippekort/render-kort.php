<?php $client = get_userdata(get_post_meta(get_the_ID(),'attach_client',true)); ?>
<?php $tasks = get_post_meta(get_the_ID(),'task',true); ?>
<div class="klippekort">
    <header class="kort-header">
        <h6 class="kort-title"><?php echo $client->user_login; ?></h6>
        <span class="kort-desc"><?php the_title(); ?></span>
    </header>
    <ul class="task-list">
        <?php 
        $time = 0; foreach($tasks as $task) : 
        $hours = $task['task_hours'];
        $time += $hours; 
        
        $status = $task['task_status'];
        $team = get_post($task['task_team']);
        $team_link = get_bloginfo('url').'/team/'.$team->post_name;
        $team_name = get_post_meta($team->ID,'fname',true);


        $date_start_short = date_i18n('d.m.y',strtotime($task['task_start']));
        $date_start_long = date_i18n('d. F Y',strtotime($task['task_start']));
        $date_end_long = date_i18n('d. F Y',strtotime($task['task_end']));
        ?>
        
        <li class="task status-<?php echo $status; ?>">
            <header class="task-header">
                <span class="task-title"><?php echo $task['task_text'] ?></span>
                <span class="task-time"><?php echo $date_start_short  ?></span>
                <span class="task-hours"><?php echo (empty($hours)) ? '': $hours.' t.'; ?> </span>
            </header>
            <div class="task-body">
                <?php echo apply_filters('the_content',$task['task_desc']); ?>
            </div>
            <footer class="task-footer">
                <div class="task-footer-status">
                    <?php if ($status == 0) : ?>
                    Opgaven er inaktiv.
                    <?php elseif ($status == 1) : ?>
                    Opgaven afventer godkendelse.
                    <?php elseif ($status == 2) : ?>
                    Opgaven er igangsat den <?php echo $date_start_long  ?> af <a href="<?php echo $team_link ?>"><?php echo $team_name  ?></a>
                    <?php else : ?>
                    Opgaven er udført den <?php echo $date_end_long ?> af <a href="<?php echo $team_link ?>"><?php echo $team_name  ?></a>
                    <?php endif;  ?>
                </div>
                <?php if ($status != 0) : ?>
                <div class="task-footer-klip">Antal klip brugt: <?php echo $task['task_hours']; ?></div>
                <?php endif; ?>
            </footer>
        </li>
        <?php endforeach; ?>
    </ul>
    <footer class="kort-footer">
        <?php if ($time < 10) :?>
        <div class="kort-footer-klip">
            Der er <?php echo 10 - $time ?> time<?php echo (10 - $time !== 1) ? 'r': ''; ?> tilbage på dit klippekort.
        </div>
        <div class="kort-actions">
            <a class="button small" href="#">Bestil en ny opgave</a>
            <a class="button small black outline" href="#" onclick="window.print();">Print</a>
        </div>
        <?php else : ?>
        <div class="kort-footer-klip">
            Der er ikke flere klip tilbage på dit nuværende klippekort.
        </div>
        <div class="kort-actions">
            <a class="button small" href="#">Bestil et nyt</a>
            <a class="button small black outline" href="#" onclick="window.print();">Print</a>
        </div>
        <?php endif;  ?>
    </footer>
</div>