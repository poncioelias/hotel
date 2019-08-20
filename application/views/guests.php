
<div class="container menu">
    <div class="row">
        <div class="row-group">       
            <h3><strong>Guests</strong></h3>
            <div class="has-search">
                <i class="fas fa-search guest-icon"></i>
                <input type="text" class="form-control input" placeholder="Quick search"/> 
            </div>
            <button type="button" class="btn-view">
                <i class="fa fa-filter fa-xs"></i> Filter
            </button>
        </div>

        <div class="row-group">
            <span>View:</span>
            <button type="button" class="btn-view">
                <i class="fa fa-table fa-xs"></i> Table
            </button>
            <button type="button" class="btn-view">
                <i class="fas fa-th fa-xs"></i> Cards
            </button>            
        </div>
    </div>

</div>


<div class="container">

    <div class="row">
        
        <strong>Most Recent</strong>
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                <td scope="col">#</td>
                <td scope="col">Name</td>
                <td scope="col">Reservations</td>
                <td scope="col">Nights stayed</td>
                <td scope="col">Last visit</td>
                <td scope="col">Group</td>
                <td scope="col">Phone</td>
                <td scope="col">Country</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach($recent_gest as $guest): ?>

                    <tr data-toggle="modal" data-target="#myModal2" data-backdrop="false" data-user-id='<?=$guest['IDGuest']?>'>
                        <td>
                            <div class="circle-ico">
                                <img src="https://ionicframework.com/docs/v3/dist/preview-app/www/assets/img/avatar-ts-woody.png" />
                            </div>
                        </td>
                        <td><?=$guest['FirstName']?></td>
                        <td><?=$guest['Reservations']?></td>
                        <td><?=$guest['NightsStayed']?></td>
                        <td>
                            <?=date("d M Y", strtotime($guest['LastVisited']))?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-dropdown-modal dropdown-toggle" style="background-color:<?=$guest['backgroundColor']?>" ><?=$guest['Group']?></button>
                       </td>
                        <td><?=$guest['Phone']?></td>
                        <td><?=$guest['Country']?></td>           
                    </tr>

                <?php endforeach; ?>
            </tbody>

        </table>
        
        <strong>All Guets</strong>
        <table class="table table-hover table-sm">
            <thead>
                <tr >
                <td scope="col">#</td>
                <td scope="col">Name</td>
                <td scope="col">Reservations</td>
                <td scope="col">Nights stayed</td>
                <td scope="col">Last visit</td>
                <td scope="col">Group</td>
                <td scope="col">Phone</td>
                <td scope="col">Country</td>
                </tr>
            </thead>

            <tbody>

                <?php foreach($all_guest as $guest): ?>

                    <tr data-toggle="modal" data-target="#myModal2" data-backdrop="false" data-user-id='<?=$guest['IDGuest']?>'>
                        <td>
                            <div class="circle-ico">
                                <img src="https://ionicframework.com/docs/v3/dist/preview-app/www/assets/img/avatar-ts-woody.png" />
                            </div>
                        </td>
                        <td><?=$guest['FirstName']?></td>
                        <td><?=$guest['Reservations']?></td>
                        <td><?=$guest['NightsStayed']?></td>
                        <td>
                            <?=date("d M Y", strtotime($guest['LastVisited']))?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-dropdown-modal dropdown-toggle" style="background-color:<?=$guest['backgroundColor']?>" ><?=$guest['Group']?></button>
                       </td>
                        <td><?=$guest['Phone']?></td>
                        <td><?=$guest['Country']?></td>           
                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

<div class="container demo">

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>	

            <div class="modal-body">
                                    
                <div class="modal-control">
                    <button type="button" class="btn-view-modal">
                        <i class="fa fa-edit fa-xs"></i> New Reservation
                    </button>
                    <button type="button" class="btn-view-modal">
                        <i class="fas fa-credit-card fa-xs"></i> Payment
                    </button>            
                </div>

                <div class="modal-avatar">
                    
                    <div class="user-img">
                        <div class="circle">
                            <img src="https://ionicframework.com/docs/v3/dist/preview-app/www/assets/img/avatar-ts-woody.png" />
                        </div>
                        <h4><strong id="titleFirstName">Woody</strong></h4>
                    </div>

                    <div class="user-status ">

                        <button type="button" class="btn btn-dropdown-modal dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="Group"></button>
                        <div class="dropdown-menu">
                            <a class="btn dropdown-item" data-value="1">Trusted</a>
                            <a class="btn dropdown-item" data-value="2">Previledged</a>
                            <a class="btn dropdown-item" data-value="3">New</a>
                        </div>		
                
                    </div>	

                </div>

                <div class="modal-detail">
                    <input hidden id="IDGuest" type="text" value="" />
                    <div class="group">
                        <nav>
                            <ul class="categ-detail">
                                <li class="active">Guests Details</li>
                                <li>Stay Details</li>
                                <li>History</li>
                                <li>Notes</li>
                                <li>Documents</li>	
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="group">
                        
                        <p class="title-information">CONTACT INFORMATION</p>
                        <div class="information">
                            <p class="title">First Name</p>
                            <p class="value" id="FirstName"></p>
                        </div>

                        <div class="information">
                            <p class="title">Last Name</p>
                            <p class="value" id="LastName"></p>
                        </div>								

                        <div class="information">
                            <p class="title">Email</p>
                            <p class="value" id="Email"></p>
                        </div>						

                        <div class="information">
                            <p class="title">Phone</p>
                            <p class="value" id="Phone"></p>
                        </div>	

                        <div class="information">
                            <p class="title">Sex</p>
                            <p class="value" id="Sex"></p>
                        </div>	

                        <div class="information">
                            <p class="title">Phone</p>
                            <p class="value"></p>
                        </div>	

                    </div>
                    
                    <div class="group">
                        
                        <p class="title-information">ADDRESS</p>
                        <div class="information">
                            <p class="title">Country</p>
                            <p class="value" id="Country"></p>
                        </div>

                        <div class="information">
                            <p class="title">City</p>
                            <p class="value" id="City"></p>
                        </div>								

                        <div class="information">
                            <p class="title">Address</p>
                            <p class="value" id="Address"></p>
                        </div>						

                    </div>

                    <div class="group">
                        
                        <p class="title-information">FAMILY MENBERS</p>
                        
                    </div>

                </div>

            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->
</div>