<?php foreach ($appointmentData as $appointment): ?>
        <tr>
            <td><?php echo $appointment['app_id']; ?></td>
            <td><?php echo $appointment['p_id']; ?></td>
            <td><?php echo $appointment['p_name']; ?></td>
            <td><?php echo $appointment['p_gender']; ?></td>
            <td><?php echo $appointment['time']; ?></td>
            <td><?php echo $appointment['note']; ?></td>
            <td>
             
            <button type="submit" name="set_time" id="set_time">Set Time</button>
           
          
            <button type="submit" name="decline" value="<?php echo $appointment['app_id'];?>">Decline</button>
      </tr>
        <?php endforeach; ?>
    </table>


    <h2>Appointment Approved List</h2>
    <table border="1">
        <tr>
            <th>Appointment Id</th>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Patient Gender</th>
            <th>Appointed Time </th>
            <th>Patient Note</th>

           
        </tr>
        
        <?php foreach ($approvedData as $approve): ?>
        <tr>
            <td><?php echo $approve['app_id']; ?></td>
            <td><?php echo $approve['p_id']; ?></td>
            <td><?php echo $approve['p_name']; ?></td>
            <td><?php echo $approve['p_gender']; ?></td>
            <td><?php echo $approve['stime']; ?></td>
            <td><?php echo $approve['note']; ?></td>
            <td><button type="submit" name="message" value="<?php echo $approve['app_id'] ?>">Message</button></td>
            
             
           
      </tr>
        <?php endforeach; ?>
