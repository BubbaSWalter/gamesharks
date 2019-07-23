<?php
					$MainArray = array();
					$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
					if ($conn->connect_error) {     // Check connection
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT COUNT(*) AS `num` FROM voting";
					$result = $conn->query($sql);
					//time,Username,Choice
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<h5>Total Votes: " . $row["num"] . "</h5>";
						}
					}

					$sql = "SELECT * FROM voting";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							$MainArray[$row['Choice1']] = $MainArray[$row['Choice1']] + 1;
							$MainArray[$row['Choice2']] = $MainArray[$row['Choice2']] + 1;
							$MainArray[$row['Choice3']] = $MainArray[$row['Choice3']] + 1;
						}
					}
					arsort($MainArray, 1);
					foreach ($MainArray as $key => $item) {
						echo "<p class='stuff'>Challenge: #" . $key . "-  Count: " . $item . "<p>";
				?>