<table class="table  table-borderless align-middle">
                                        <thead>
                                            <tr class="text-capitalize  ">
                                                <th class="text-muted h6 ">name</th>
                                                <th class=" text-muted h6">email</th>
                                                <th class=" text-muted h6">action</th>
                                                <th class=" text-muted h6">action</th>
                                                
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php
                                        foreach($data as $user){
                                            ?>
                                            <tr class="bg-white">
                                            
                                            <td><?= $user->name?></td>
                                                <td><?= $user->email?></td>
                                                <td><a href='<?=URLROOT?>/Pages/user_blabla/?id=<?php echo $user->id;?>'>modifer</a></td>
                                                <td><a href='<?=URLROOT?>/BlablaController/delete_blabla/<?php echo $user->id;?>'> supprimer</a></td>
                                        
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
