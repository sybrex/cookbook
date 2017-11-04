<?php
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

// Get the user you want to switch to
$user = $this->get('bs.betshop.user.repository')->findOneBy(array('username' => 'viktor'));

// Create token with specified user and specified firewall name ('admin')
$token = new UsernamePasswordToken($user, null, 'admin', $user->getRoles());

// Apply the token
$this->container->get('security.context')->setToken($token);
