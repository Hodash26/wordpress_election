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
define( 'DB_NAME', 'wordpress_election' );

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
define( 'AUTH_KEY',         '}WrV:h WD02wv<@ux_:4]4Baq^EQQ#KpFjT2V3+(_^;hEq  3dI)RfR~!w)kPj03' );
define( 'SECURE_AUTH_KEY',  'b3I{NM%grW2-w`]`|{sZI=6+#6cke}_b=_zs?xqn!zM9zWy}ivvkv-[<xPUx=(QG' );
define( 'LOGGED_IN_KEY',    '?E&7$=I]?H./#$?$y8DV;]v|*-tb<(M{DE!n`dCaaS`LXS>p/:&d!|lYNnTG*7yr' );
define( 'NONCE_KEY',        '#Y+XE[fXuwzLAI8}?zhXy{_:>1TY+$77`6nV~owqPO1z5Jd/>V6n*d=BA5k<>vp_' );
define( 'AUTH_SALT',        ' XIf(PtZj*?Yx7krh`&*>&#7wVQxJ6PZ{=syF]!wFX:`pL8u/Kkq`1PLLvPo,x}8' );
define( 'SECURE_AUTH_SALT', 'XqJU8w5|=|gbIQ>a07i|:tEtLbN)j0/-dOxjUF9Tceo{$U;eSSI25@Q9(%U$>XCu' );
define( 'LOGGED_IN_SALT',   '^9ejT Y;G9g*9&)KS4[HDnK~H=7%iho CdhwjZ7|u5,zmN*|(v1f@8,o*87w15?D' );
define( 'NONCE_SALT',       ':7F/pJxk|`+4uMzw%X.C>48,t{yV?`fN[uevMps4<d|LXGJBk&.1N+]%f+o#3MCq' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
