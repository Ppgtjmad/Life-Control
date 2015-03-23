<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Life Control</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION['user_name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
						<?php
								if ($_SESSION['user_level'] >= 3)
								{
						?>
									<li class='divider'></li>
									<li>
										<a href='admin.php'><i class='fa fa-fw fa-cog'></i> Admin</a>
									</li>

									<li class='divider'></li>
									<li>
										<a href='register.php'><i class='fa fa-fw fa-cog'></i> Add New User</a>
									</li>
						<?php								
								}
						?>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="players.php"><i class="fa fa-fw fa-child "></i> Players</a>
                    </li>
					<?php
						if ($_SESSION['user_level'] >= 2)
						{
					?>
							<li>
								<a href="vehicles.php"><i class="fa fa-fw fa-car"></i> Vehicles</a>
							</li>
							<li>
								<a href="houses.php"><i class="fa fa-fw fa-home"></i> Houses</a>
							</li>
						   <li>
								<a href="gangs.php"><i class="fa fa-fw fa-sitemap"></i> Gangs</a>
							</li>
						<?php
							if (alits_life_4 == TRUE)
							{
						?>
							   <li>
									<a href="wanted.php"><i class="fa fa-fw fa-list-ul"></i> Wanted</a>
								</li>
						<?php								
							}
						?>
					<?php								
						}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>