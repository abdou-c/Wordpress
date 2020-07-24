<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cfp_getech' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JNoVZFB;MG/<HLp])gQ^y<*hi@BR(#7HgS?R xX7`%K>K8YXB/xTG`h|t^9oIU3$' );
define( 'SECURE_AUTH_KEY',  'qO0@mkOt]1K$YGEr_`)~Z|8`ag#HKS5 )_N[Rf0u5gREcgiSZ*Y0e?-U2H6NRVOj' );
define( 'LOGGED_IN_KEY',    '{h8+>xkUak;pbZY<plsM4;WsBE*P( 9!@5zGe7((/ik1Y?Tb)b6Jz^se-G-=F=C ' );
define( 'NONCE_KEY',        '<6^m),wJWJ=P:S-2qE V6qWN~cLlIt_#gVY:J?Z&bR-BEn)zR#!xV#5B-;F#|nZ<' );
define( 'AUTH_SALT',        'z5f|@I0GHvFSfQd;l+KIg:DK)h_z=sg7O@S$/>xC6ae5 DAO#3S2svFQ$@5j@7O=' );
define( 'SECURE_AUTH_SALT', '[Jip^|y+DsI^8iz|)m1u}~pImnKmT9+o]rD%N~||im*xo8wVDfF>r)V-Rheet~eg' );
define( 'LOGGED_IN_SALT',   '7BJ[f,*?whOMzr96jeN=y$kjeYp}k!:3L5+{LKlCh>%R1_lovV[2*4S`l0D6J;^e' );
define( 'NONCE_SALT',       '~F;ed(]?kUj^cduxdt:^/&${j&!.=M=T9i ~wUQD%HMC[bAI2I_tK^c0(L,RuO }' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
