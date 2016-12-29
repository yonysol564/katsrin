<?php
    $set_appo_form = get_field('set_appo_form', 'option');
    $department_manager = get_field('choose_department_manager');
   //print_r($department_manager);
?>
<div class="schedule-section" data-managerid="<?php echo $department_manager->ID ?>">
    <div class="head_h5"><?php echo get_field('appointment_title'); ?></div>

      <?php if( have_rows('manager_schedule' ,$department_manager->ID) ): ?>
        <?php
        $rows = array();
        while ( have_rows('manager_schedule' ,$department_manager->ID) ) : the_row();
            ob_start();

            $schedule_day = get_sub_field('manager_day');
            $day_id = date("w",strtotime($schedule_day)) + 1;
        ?>
          <div class="schedule-item">

            <div class="head_h6">
                <?php echo _e($schedule_day); ?>
                <?php
                    $now = date(time());
                    $next_day_date  = strtotime('next ' . strtolower($schedule_day), $now);
                    $schedule_date  = date('d/m/Y' ,$next_day_date); 
                ?>
                <div>
                    <?php echo $schedule_date;  ?>
                </div>
            </div>

            <?php if( have_rows('manager_hours' ,$department_manager->ID) ): ?>
                <div class="wrap_hours">
                    <?php while ( have_rows('manager_hours' ,$department_manager->ID) ) : the_row();
                        $from_hour  = get_sub_field('manager_from_hour');
                        $until_hour = get_sub_field('manager_until_hour');
                        $taken_appo = is_take_appointment($department_manager->ID,$from_hour,$until_hour,$next_day_date);
                            if($taken_appo){ $line_through = 'line_through';} else {$line_through = '';}
                        ?>
                        <div data-hours="<?php echo $from_hour; ?>-<?php echo $until_hour; ?> "
                        class="head_hours <?php echo $line_through;  ?>">
                            <?php echo $from_hour; ?>-<?php echo $until_hour; ?>
                        </div><div class="clear"></div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <button data-linuxdate="<?php echo $next_day_date; ?>" data-dayname="<?php echo $schedule_day; ?>" data-day="<?php echo $day_id; ?>" data-manager="     <?php echo $department_manager->ID; ?>" type="button" class="head_h6 openPopup"><?php echo _e('Set Appointment', 'kasrin'); ?></button>
                <div class="clear"></div>
            </div>
            <?php $rows[$next_day_date] = ob_get_clean(); ?>
          <?php endwhile; ?>

          <?php
            ksort($rows);
            echo implode("", $rows);
          ?>
        <?php endif; ?>
</div>

<button type="button" class="blackOpacityPOP"></button>
<div class="formPOP">
    <p class="formPOPheadline"><?php echo _e('Set an appointment', 'kasrin'); ?></p>
    <?php echo do_shortcode($set_appo_form); ?>
    <button type="button" class="closePOP" title="Close"></button>
</div>


<!-- <button type="button" class="blackOpacityPOP"></button>
<div class="formPOP">
    <p class="formPOPheadline">קביעת פגישה</p>
    <form action="">
        <div class="popInputsWrapper first">
            <input type="text" name="fname" value="שם פרטי" class="popInputs" />
        </div>

        <div class="popInputsWrapper second">
            <input type="text" name="fname" value="כתובת" class="popInputs" />
        </div>

        <div class="popInputsWrapper first">
            <input type="text" name="fname" value="טלפון" class="popInputs" />
        </div>

        <div class="popInputsWrapper second">
            <input type="text" name="fname" value="דוא”ל" class="popInputs" />
        </div>

        <div class="popInputsWrapper first">
            <select class="popInputs" name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
            </select>
        </div>

        <div class="popInputsWrapper second">
            <input type="submit" value="שלח" class="send" />
        </div>





        <div class="clear"></div>
    </form>
    <button type="button" class="closePOP" title="Close"></button>
</div> -->
