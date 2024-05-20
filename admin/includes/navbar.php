
		<section class="menu">
			<div class="image">
				<img src="./Bank.jpeg" alt="profile1">
				<h2>PESA PAP</h2>
			</div>
			<div class="items">
				<li><a href="./home.php"><i class="far fa-clipboard"></i>DASHBOARD</a></li>
				<li><a href="./users.php"><i class="fas fa-user-md"></i>Clients</a></li>
				<li><a href="./all_loans.php"><i class="fas fa-user-injured"></i>Loans</a></li>
				<li><a href="./admin_activeloans.php"><i class="fas fa-calendar-plus"></i>Active Loans</a></li>
				<li><a href="./admin_pendingloan.php"><i class="fas fa-share-square"></i>Pending Loans</a></li>
				<li><a href="./admin_report.php"><i class="fas fa-share-square"></i>Requests</a></li>
				
				<li><a href="#">
					<?php

						if(isset($_SESSION['admin'])){
							$username = $_SESSION['admin'];
								echo '
									
									<a href="./logout.php" class="logout" style="padding-left:1%"><i class="fas fa-sign-out-alt"></i>logout</a>
							';
						}else{
							echo '

							';
						}

					?>

				</a></li>
			</div>
		</section>
		<section class="right">
			<div class="navigation">
				<div class="nav">
					<div class="search">
						<i class="fab fa-searchengin"></i>
						<input type="text" placeholder="clients name">
						<button>Search</button>
					</div>
				</div>
				<div class="profile">
					<i class="far fa-user-circle"></i>
					<?php

					if(isset($_SESSION['admin'])){
					$username = $_SESSION['admin'];
					echo '
						<li><a>'.$username.'</a></li>
				';
			}else{
				echo '

				';
			}

		?>
				</div>
			</div>		