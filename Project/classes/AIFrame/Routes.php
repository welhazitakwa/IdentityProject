<?php
namespace AIFrame;

interface Routes {
	public function getRoutes(): array;
	public function getAuthentication(): \AIFrame\Authentication;
	public function checkPermission($permission): bool;
}