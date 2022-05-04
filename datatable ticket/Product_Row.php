<tr class="">
    <td><?php echo $ticket['Id'];?></td>
    <td><?php echo $ticket['NameAirline'];?></td>
    <td><?php echo $ticket['TicketType'];?></td>
    <td><?php echo $ticket['FlightType'];?></td>
    <td><?php echo $ticket['AirplaneType'];?></td>
    <td><?php echo $ticket['StartingCity'];?></td>
    <td><?php echo $ticket['DestinationCity'];?></td>
    <td><?php echo $ticket['FlightTime'];?></td>
    <td><?php echo $ticket['LandingTime'];?></td>
    <td><?php echo $ticket['Price'];?></td>
    

    <td>
        <a href="Update_Ticket.php?id=<?php echo $ticket['Id'];?>" class="btnupdate"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Delete_User.php?id=<?php echo $ticket['Id'];?>" class="btndelete"><i class="fa-solid fa-circle-minus"></i></a>

    </td>
</tr>
