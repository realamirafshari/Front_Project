<tr class="">
<td><?php echo $user['Id'];?></td>
    <td><?php echo $user['Email'];?></td>
    <td><?php echo $user['UserName'];?></td>
    <td><?php echo $user['AccessLevel'];?></td>

    <td>
        <a href="Update_User.php?id=<?php echo $user['Id'];?>" class="btnupdate"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Delete_User.php?id=<?php echo $user['Id'];?>" class="btndelete"><i class="fa-solid fa-circle-minus"></i></a>

    </td>
</tr>