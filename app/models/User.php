<?php

class User extends Model
{
	public function register($full_name, $username, $password)
	{
		try {
			$query = "INSERT INTO users (full_name, username, password) VALUES (:full_name, :username, :password)";

			$stmt = $this->db->conn->prepare($query);

			$stmt->bindParam(':full_name', $full_name);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));

			return $stmt->execute();
		} catch (PDOException $e) {
			error_log("Registration failed: " . $e->getMessage());
			return false;
		}
	}

    public function login($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->db->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }
}
