<?php
 
namespace common\components;
 
 

class AccessRule extends \yii\filters\AccessRule
{
	protected function matchRole($user)
	{
		if (empty($this->roles)) {
			return true;
		}
		foreach ($this->roles as $role) {
			if ($role === '?' && $user->isGuest()) {
				return true;
			} elseif ($role === '@' && !$user->isGuest()) {
				return true;
			} elseif (!$user->isGuest()) {
				if ($role === $user->identity->role) {
					return true;
				}
			}
		}
		return false;
	}
}
