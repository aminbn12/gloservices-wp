<?php
/**
 * Redirection 301 de l'archive CPT /projets/ vers la page propre unique /projet/
 *
 * @package Gloservices
 */

wp_redirect(home_url('/projet/'), 301);
exit;
