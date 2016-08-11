<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints company information as per 'schema.org',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_opening_times' ) ) :

function hobbes_opening_times() {
    
      $options = get_option( 'theme_options' ); ?>
   
    <div class="premises-opening-times">
      
        
        <table class="table openingtimes">
          <thead>
            <tr>
              <th colspan="2">Opening Times:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Monday</td>
              <td><?php echo $options['opening_times']; ?></td>
            </tr>
            <tr>
              <td>Tuesday</td>
              <td><?php echo $options['opening_times_2']; ?></td>
            </tr>
            <tr>
              <td>Wednesday</td>
              <td><?php echo $options['opening_times_3']; ?></td>
            </tr>
            <tr>
              <td>Thursday</td>
              <td><?php echo $options['opening_times_4']; ?></td>
            </tr>
            <tr>
              <td>Friday</td>
              <td><?php echo $options['opening_times_5']; ?></td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td><?php echo $options['opening_times_6']; ?></td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td><?php echo $options['opening_times_7']; ?></td>
            </tr>
          </tbody>
        </table>
        
    
    </div>
    
    
<?php } endif;