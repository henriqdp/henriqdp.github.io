<?php //>
if (function_exists('password_hash')) {
	// Implement with password_hash
	abstract class PasswordHash {
		private function __construct() {} // static class
		public static function hash($password) {
			return password_hash($password, PASSWORD_DEFAULT);
		}
		public static function match($password, $hash) {
			return password_verify($password, $hash);
		}
	}
} else {
	// Implement with crypt
	abstract class PasswordHash {
		private function __construct() {} // static class
		public static function hash($password) {

		}
		public static function match($password, $hash) {
			return ($hash == crypt($password, $hash));
		}
	}
}