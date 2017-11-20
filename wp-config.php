/**
 * Custom user tables
 * Change the names of tables that contain user information
 *
 */
$table_prefix  = 'xwl27_';
define( 'CUSTOM_USER_TABLE',      $table_prefix . 'stzvmDr6A' );
define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'hHz6VB5GEZ' );

/* Hepsi bu kadar. Mutlu bloglamalar! */
/* Enable WordPress Cache */
define( 'WP_CACHE', true );

/* Always SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );

/* Custom WordPress Folders.
 * Change the name and location of wp-content, plugins and uploads folders
*/
define( 'UPLOADS',        './dosyalar' );
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/eklentiler' );
define( 'WP_PLUGIN_URL', 'https://www.your-site.com/eklentiler' );

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/public' );
define( 'WP_CONTENT_URL', 'https://www.your-site.com/public' );

/* Disable theme and plugin install */
define( 'DISALLOW_FILE_MODS', true );
/* Disable theme and plugin edit */
define( 'DISALLOW_FILE_EDIT', true );
define('FS_METHOD', 'ftpext');
/* edit overwriten images */
define('IMAGE_EDIT_OVERWRITE', true);

/* custom autosave time */
define( 'AUTOSAVE_INTERVAL', 300 ); // Seconds
/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '3' );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );
