<?php

namespace App\Locale;

final class Greek implements LangInterface
{
	public static function code()
	{
		return 'el';
	}

	public static function get_locale()
	{
		$locale = [
			'USERNAME' => 'όνομα χρήστη',
			'PASSWORD' => 'κωδικός πρόσβασης',
			'ENTER' => 'Είσοδος',
			'CANCEL' => 'Άκυρο',
			'SIGN_IN' => 'Συνδεθείτε',
			'CLOSE' => 'Κλείσιμο',
			'SETTINGS' => 'Ρυθμίσεις',
			'SEARCH' => 'Αναζήτηση ...',
			'MORE' => 'Περισσότερα',

			'USERS' => 'Χρήστες',
			'SHARING' => 'Κοινή χρήση',
			'CHANGE_LOGIN' => 'Αλλαγή σύνδεσης',
			'CHANGE_SORTING' => 'Αλλαγή Ταξινόμησης',
			'SET_DROPBOX' => 'Ορίστε λογαριασμό Dropbox',
			'ABOUT_LYCHEE' => 'Περί Lychee',
			'DIAGNOSTICS' => 'Διαγνωστικά',
			'LOGS' => 'Εμφάνιση Καταγραφών',
			'SIGN_OUT' => 'Αποσύνδεση',
			'UPDATE_AVAILABLE' => 'Διαθέσιμη Ενημέρωση!',
			'DEFAULT_LICENSE' => 'Προεπιλεγμένη άδεια για τις νέες μεταφορτώσεις:',
			'SET_LICENSE' => 'Ορισμός Άδειας',
			'SET_OVERLAY_TYPE' => 'Ορισμός Τύπου Overlay',
			'SET_MAP_PROVIDER' => 'Set OpenStreetMap tiles provider',

			'SMART_ALBUMS' => 'Έξυπνα λευκώματα',
			'SHARED_ALBUMS' => 'Κοινόχρηστα λευκώματα',
			'ALBUMS' => 'Λευκώματα',
			'PHOTOS' => 'Εικόνες',
			'SEARCH_RESULTS' => 'Search results',

			'RENAME' => 'Μετονομασία',
			'RENAME_ALL' => 'Μετονομασία Επιλεγμένων',
			'MERGE' => 'Συγχώνευση',
			'MERGE_ALL' => 'Συγχώνευση Επιλεγμένων',
			'MAKE_PUBLIC' => 'Κάντε το Δημόσιο',
			'SHARE_ALBUM' => 'Κοινή χρήση Λευκώματος',
			'SHARE_PHOTO' => 'Κοινή χρήση Φωτογραφίας',
			'VISIBILITY_ALBUM' => 'Ορατότητα Λευκώματος',
			'VISIBILITY_PHOTO' => 'Ορατότητα Φωτογραφίας',
			'DOWNLOAD_ALBUM' => 'Λήψη Λευκώματος',
			'ABOUT_ALBUM' => 'Πληροφορίες Λευκώματος',
			'DELETE_ALBUM' => 'Διαγραφή Λευκώματος',
			'MOVE_ALBUM' => 'Μετακίνηση Λευκώματος',
			'FULLSCREEN_ENTER' => 'Εισέλθετε σε λειτουργία Πλήρης Οθόνης',
			'FULLSCREEN_EXIT' => 'Εξέλθετε από λειτουργία Πλήρης Οθόνης',

			'DELETE_ALBUM_QUESTION' => 'Διαγραφή Λευκώματος και Φωτογραφιών',
			'KEEP_ALBUM' => 'Διατήρηση Λευκώματος',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε αυτό το λεύκωμα',
			'DELETE_ALBUM_CONFIRMATION_2' => 'και όλες τις φωτογραφίες που περιέχει; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',

			'DELETE_ALBUMS_QUESTION' => 'Διαγραφή Λευκωμάτων και Φωτογραφιών',
			'KEEP_ALBUMS' => 'Διατήρηση Λευκωμάτων',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλα',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'τα επιλεγμένα λευκώματα και όλες τις φωτογραφίες που περιέχουν; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',

			'DELETE_UNSORTED_CONFIRM' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλες τις \'Μη Ταξινομημένες\' φωτογραφίες;<br>Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'CLEAR_UNSORTED' => 'Καθαρισμός των μη ταξινομημένων φωτογραφιών',
			'KEEP_UNSORTED' => 'Διατήρηση των Μη Ταξινομημένων',

			'EDIT_SHARING' => 'Επεξεργασία Κοινής Χρήσης',
			'MAKE_PRIVATE' => 'Κάντε το Ιδιωτικό',

			'CLOSE_ALBUM' => 'Κλείσιμο Λευκώματος',
			'CLOSE_PHOTO' => 'Κλείσιμο Φωτογραφίας',
			'CLOSE_MAP' => 'Close Map',

			'ADD' => 'Προσθήκη',
			'MOVE' => 'Μετακίνηση',
			'MOVE_ALL' => 'Μετακίνηση Επιλεγμένων',
			'DUPLICATE' => 'Κλώνοποίηση',
			'DUPLICATE_ALL' => 'Κλώνοποίηση Επιλεγμένων',
			'COPY_TO' => 'Αντιγραφή σε...',
			'COPY_ALL_TO' => 'Αντιγραφή Επιλεγμένων σε...',
			'DELETE' => 'Διαγραφή',
			'DELETE_ALL' => 'Διαγραφή Επιλεγμένων',
			'DOWNLOAD' => 'Λήψη',
			'DOWNLOAD_ALL' => 'Λήψη Επιλεγμένων',
			'UPLOAD_PHOTO' => 'Μεταφόρτωση Φωτογραφίας',
			'IMPORT_LINK' => 'Εισαγωγή από Σύνδεσμο',
			'IMPORT_DROPBOX' => 'Εισαγωγή από Dropbox',
			'IMPORT_SERVER' => 'Εισαγωγή από Εξυπηρετητή',
			'NEW_ALBUM' => 'Νέο Λεύκωμα',

			'TITLE_NEW_ALBUM' => 'Εισάγετε έναν τίτλο για το νέο λεύκωμα:',
			'UNTITLED' => 'Χωρίς Τίτλο',
			'UNSORTED' => 'Μη Ταξινομημένα',
			'STARRED' => 'Με Αστέρι',
			'RECENT' => 'Πρόσφατα',
			'PUBLIC' => 'Δημόσια',
			'NUM_PHOTOS' => 'Φωτογραφίες',

			'CREATE_ALBUM' => 'Δημιουργία Λευκώματος',

			'STAR_PHOTO' => 'Βάλτε Αστέρι στη Φωτογραφία',
			'STAR' => 'Βάλτε Αστέρι',
			'STAR_ALL' => 'Βάλτε Αστέρι στα επιλεγμένα',
			'TAGS' => 'Ετικέτες',
			'TAGS_ALL' => 'Ετικέτες στα επιλεγμένα',
			'UNSTAR_PHOTO' => 'Αφαιρέστε Αστέρια από τη Φωτογραφία',

			'FULL_PHOTO' => 'Πρωτότυπη Φωτογραφία',
			'ABOUT_PHOTO' => 'Πληροφορίες Φωτογραφίας',
			'DISPLAY_FULL_MAP' => 'Map',
			'DIRECT_LINK' => 'Απευθείας Σύνδεσμος',
			'DIRECT_LINKS' => 'Απευθείας Σύνδεσμοι',

			'ALBUM_ABOUT' => 'Περί',
			'ALBUM_BASICS' => 'Βασικές Πληροφορίες',
			'ALBUM_TITLE' => 'Τίτλος',
			'ALBUM_NEW_TITLE' => 'Εισάγετε έναν νέο τίτλο για αυτό το Λεύκωμα:',
			'ALBUMS_NEW_TITLE_1' => 'Εισάγετε νέο τίτλο για όλα',
			'ALBUMS_NEW_TITLE_2' => 'τα επιλεγμένα λευκώματα:',
			'ALBUM_SET_TITLE' => 'Ορίστε Τίτλο',
			'ALBUM_DESCRIPTION' => 'Περιγραφή',
			'ALBUM_NEW_DESCRIPTION' => 'Εισάγετε μία νέα περιγραφή για αυτό το λεύκωμα:',
			'ALBUM_SET_DESCRIPTION' => 'Ορίστε Περιγραφή',
			'ALBUM_ALBUM' => 'Λεύκωμα',
			'ALBUM_CREATED' => 'Δημιουργήθηκε',
			'ALBUM_IMAGES' => 'Εικόνες',
			'ALBUM_VIDEOS' => 'Βίντεο',
			'ALBUM_SUBALBUMS' => 'Υπο-λευκώματα',
			'ALBUM_SHARING' => 'Κοινή Χρήση',
			'ALBUM_SHR_YES' => 'ΝΑΙ',
			'ALBUM_SHR_NO' => 'Όχι',
			'ALBUM_PUBLIC' => 'Δημόσιο',
			'ALBUM_PUBLIC_EXPL' => 'Το λεύκωμα είναι προσπελάσιμο από τρίτους, υπό τους ακόλουθους περιορισμούς.',
			'ALBUM_FULL' => 'Πρωτότυπο',
			'ALBUM_FULL_EXPL' => 'Οι εικόνες πλήρης ανάλυσης είναι διαθέσιμες.',
			'ALBUM_HIDDEN' => 'Κρυφό',
			'ALBUM_HIDDEN_EXPL' => 'Μόνο άτομα με τον απευθείας σύνδεσμο μπορούν να δουν αυτό το λεύκωμα.',
			'ALBUM_DOWNLOADABLE' => 'Δυνατότητα Λήψης',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Οι επισκέπτες της γκαλερί μπορούν να κατεβάσουν αυτό το λεύκωμα.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Display social media sharing links.',
			'ALBUM_PASSWORD' => 'Κωδικός Πρόσβασης',
			'ALBUM_PASSWORD_PROT' => 'Προστατεύεται με κωδικό πρόσβασης',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Αυτό το λεύκωμα είναι μόνο προσβάσιμο με έναν έγκυρο κωδικό πρόσβασης.',
			'ALBUM_PASSWORD_REQUIRED' => 'Αυτό το λεύκωμα προστατεύεται με κωδικό πρόσβασης. Εισάγετε τον κωδικό πρόσβασης παρακάτω για να δείτε τις φωτογραφίες αυτού του λευκώματος:',
			'ALBUM_MERGE_1' => 'Είστε σίγουρη/ος πως θέλετε να συγχωνεύσετε αυτό το λεύκωμα',
			'ALBUM_MERGE_2' => 'σε αυτό το λεύκωμα',
			'ALBUMS_MERGE' => 'Είστε σίγουρη/ος πως θέλετε να συγχωνεύσετε όλα τα επιλεγμένα λευκώματα',
			'MERGE_ALBUM' => 'Συγχώνευση Λευκωμάτων',
			'DONT_MERGE' => 'Να μη γίνει συγχώνευση',
			'ALBUM_MOVE_1' => 'Είστε σίγουρη/ος πως θέλετε να μετακινήσετε το λεύκωμα',
			'ALBUM_MOVE_2' => 'σε αυτό το λεύκωμα',
			'ALBUMS_MOVE' => 'Είστε σίγουρη/ος πως θέλετε να μετακινήσετε όλα τα επιλεγμένα λευκώματα σε αυτό το λεύκωμα',
			'MOVE_ALBUMS' => 'Μετακίνηση Λευκωμάτων',
			'NOT_MOVE_ALBUMS' => 'Να μη γίνει μετακίνηση',
			'ROOT' => 'Λευκώματα',
			'ALBUM_REUSE' => 'Επαναχρησιμοποίηση',
			'ALBUM_LICENSE' => 'Άδεια',
			'ALBUM_SET_LICENSE' => 'Ορισμός Άδειας',
			'ALBUM_LICENSE_HELP' => 'Χρειάζεστε βοήθεια για την επιλογή άδειας;',
			'ALBUM_LICENSE_NONE' => 'Καμία',
			'ALBUM_RESERVED' => 'Με επιφύλαξη παντός δικαιώματος',

			'PHOTO_ABOUT' => 'Περί',
			'PHOTO_BASICS' => 'Βασικές Πληροφορίες',
			'PHOTO_TITLE' => 'Τίτλος',
			'PHOTO_NEW_TITLE' => 'Εισάγετε έναν νέο τίτλο για αυτή τη φωτογραφία:',
			'PHOTO_SET_TITLE' => 'Ορισμός Τίτλου',
			'PHOTO_UPLOADED' => 'Μεταφορτώθηκε',
			'PHOTO_DESCRIPTION' => 'Περιγραφή',
			'PHOTO_NEW_DESCRIPTION' => 'Εισάγετε μία νέα περιγραφή για αυτή τη φωτογραφία:',
			'PHOTO_SET_DESCRIPTION' => 'Ορισμός Περιγραφής',
			'PHOTO_NEW_LICENSE' => 'Προσθήκη Άδειας',
			'PHOTO_SET_LICENSE' => 'Ορισμός Άδειας',
			'PHOTO_LICENSE' => 'Άδεια',
			'PHOTO_REUSE' => 'Επαναχρησιμοποίηση',
			'PHOTO_LICENSE_NONE' => 'Καμία',
			'PHOTO_RESERVED' => 'Με επιφύλαξη παντός δικαιώματος',
			'PHOTO_LATITUDE' => 'Γεωγραφικό πλάτος',
			'PHOTO_LONGITUDE' => 'Γεωγραφικό μήκος',
			'PHOTO_ALTITUDE' => 'Υψόμετρο',
			'PHOTO_IMGDIRECTION' => 'Κατεύθυνση',
			'PHOTO_LOCATION' => 'Location',
			'PHOTO_IMAGE' => 'Εικόνα',
			'PHOTO_VIDEO' => 'Video',
			'PHOTO_SIZE' => 'Μέγεθος',
			'PHOTO_FORMAT' => 'Μορφή',
			'PHOTO_RESOLUTION' => 'Ανάλυση',
			'PHOTO_DURATION' => 'Duration',
			'PHOTO_FPS' => 'Ρυθμός καρέ',
			'PHOTO_TAGS' => 'Ετικέτες',
			'PHOTO_NOTAGS' => 'Χωρίς Ετικέτες',
			'PHOTO_NEW_TAGS' => 'Εισάγετε τις ετικέτες σας για αυτή τη φωτογραφία. Μπορείτε να προσθέσετε πολλαπλές ετικέτες χωρίζοντάς \'τες με ένα κόμμα:',
			'PHOTO_NEW_TAGS_1' => 'Εισάγετε τις ετικέτες σας για όλες',
			'PHOTO_NEW_TAGS_2' => 'τις επιλεγμένες φωγογραφίες. Υφιστάμενες ετικέτες θα αντικατασταθούν. Μπορείτε να προσθέσετε πολλαπλές ετικέτες χωρίζοντάς \'τες με ένα κόμμα:',
			'PHOTO_SET_TAGS' => 'Ορισμός Ετικετών',
			'PHOTO_CAMERA' => 'Κάμερα',
			'PHOTO_CAPTURED' => 'Φωτογραφήθηκε',
			'PHOTO_MAKE' => 'Έτος Κατασκευής',
			'PHOTO_TYPE' => 'Τύπος/Μοντέλο',
			'PHOTO_LENS' => 'Lens',
			'PHOTO_SHUTTER' => 'Ταχύτητα Κλείστρου',
			'PHOTO_APERTURE' => 'Διάφραγμα',
			'PHOTO_FOCAL' => 'Εστιακό μήκος',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Κοινή Χρήση',
			'PHOTO_SHR_PLUBLIC' => 'Δημόσια',
			'PHOTO_SHR_ALB' => 'Ναι (Λεύκωμα)',
			'PHOTO_SHR_PHT' => 'Ναι (Φωτογραφία)',
			'PHOTO_SHR_NO' => 'Όχι',
			'PHOTO_DELETE' => 'Διαγραφή Φωτογραφίας',
			'PHOTO_KEEP' => 'Να μη γίνει διαγραφή',
			'PHOTO_DELETE_1' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε αυτή τη φωτογραφία',
			'PHOTO_DELETE_2' => '; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'PHOTO_DELETE_ALL_1' => 'Είστε σίγουρη/ος πως θέλετε να διαγράψετε όλες',
			'PHOTO_DELETE_ALL_2' => 'τις επιλεγμένες φωτογραφίες; Αυτή η ενέργεια δεν μπορεί να αναιρεθεί!',
			'PHOTOS_NEW_TITLE_1' => 'Εισάγετε νέο τίτλο για όλες',
			'PHOTOS_NEW_TITLE_2' => 'τις επιλεγμένες φωτογραφίες:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Αυτή η φωτογραφία βρίσκεται σε ένα δημόσιο λεύκωμα. Για να κάνετε αυτή τη φωτογραφία ιδιωτική ή δημόσια, επεξεργαστείτε τις ρυθμίσεις ορατότητας του συσχετιζόμενου Λευκώματος.',
			'PHOTO_SHOW_ALBUM' => 'Εμφάνιση Λευκώματος',
			'PHOTO_PUBLIC' => 'Δημόσια',
			'PHOTO_PUBLIC_EXPL' => 'Η φωτογραφία είναι προσπελάσιμο από τρίτους, υπό τους ακόλουθους περιορισμούς.',
			'PHOTO_FULL' => 'Πρωτότυπη',
			'PHOTO_FULL_EXPL' => 'Η εικόνα πλήρης ανάλυσης είναι διαθέσιμη.',
			'PHOTO_HIDDEN' => 'Hidden',
			'PHOTO_HIDDEN_EXPL' => 'Μόνο άτομα με τον απευθείας σύνδεσμο μπορούν να δουν αυτή τη φωτογραφία.',
			'PHOTO_DOWNLOADABLE' => 'Δυνατότητα Λήψης',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Οι επισκέπτες της γκαλερί μπορούν να κατεβάσουν αυτή τη φωτογραφία.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Share button is visible',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Display social media sharing links.',
			'PHOTO_PASSWORD_PROT' => 'Προστατεύεται με κωδικό πρόσβασης',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Αυτή η φωτογραφία είναι μόνο προσβάσιμη με έναν έγκυρο κωδικό πρόσβασης.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Οι ιδιότητες κοινής χρήσης αυτής της φωτογραφίας θα αλλάξουν στις ακόλουθες:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Επειδή αυτή η φωτογραφία βρίσκεται σε ένα δημόσιο λεύκωμα, κληρονομεί τις ρυθμίσεις ορατότητας του λευκώματος στο οποίο ανήκει. Η τρέχουσα ορατότητά της φαίνεται παρακάτω για ενημερωτικούς λόγους μόνο.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Η ορατότητα αυτής της φωτογραφίας μπορεί να ρυθμιστεί με μεγαλύτερη λεπτομέρεια χρησιμοποιώντας τις γενικές ρυθμίσεις του Lychee. Η τρέχουσα ορατότητά της φαίνεται παρακάτω για ενημερωτικούς λόγους μόνο.',
			'PHOTO_SHARING_CONFIRM' => 'Αποθήκευση',

			'LOADING' => 'Φορτώνει',
			'ERROR' => 'Σφάλμα',
			'ERROR_TEXT' => 'Ουπς, φαίνεται πως κάτι πήγε στραβά. Παρακαλούμε κάντε ανανέωση της σελίδας και προσπαθήστε ξανά!',
			'ERROR_DB_1' => 'Αδυναμία σύνδεσης στη βάση δεδομένων διότι η πρόσβαση απορρίφθηκε. Ελέγξτε ξανά τις ρυθμίσεις του εξυπηρετητή, όνομα χρήστη και κωδικό πρόσβασης και σιγουρευτείτε πως η πρόσβαση από την τρέχουσα τοποθεσία επιτρέπεται.',
			'ERROR_DB_2' => 'Αδυναμία δημιουργίας βάσης δεδομένων. Ελέγξτε ξανά τις ρυθμίσεις του εξυπηρετητή, όνομα χρήστη και κωδικό πρόσβασης και σιγουρευτείτε πως ο συγκεκριμένος χρήστης έχει τα δικαιώματα αλλαγής της βάσης δεδομένων και προσθήκης περιεχομένου σε αυτή.',
			'ERROR_CONFIG_FILE' => "Αδυναμία αποθήκευσης ρυθμίσεων. Η πρόσβαση δεν επιτρέπεται στον κατάλογο <b>'data/'</b>. Παρακαλούμε ρυθμίστε τα δικαιώματα ανάγνωσης, γραφής και εκτέλεσης για άλλους (others) στον κατάλογο <b>'data/'</b> και <b>'uploads/'</b>. Ρίξτε μια ματιά στο αρχείο readme για περισσότερες πληροφορίες.",
			'ERROR_UNKNOWN' => 'Κάτι απρόσμενο συνέβη. Παρακαλούμε προσπαθείστε ξανά και ελέγξτε την εγκατάστασή σας και τον εξυπηρετητή. Ρίξτε μια ματιά στο αρχείο readme για περισσότερες πληροφορίες.',
			'ERROR_LOGIN' => 'Αδυναμία αποθήκευσης στοιχείων εισόδου. Παρακαλούμε δοκιμάστε ξανά με διαφορετικό όνομα χρήστη και κωδικό πρόσβασης!',
			'ERROR_MAP_DEACTIVATED' => 'Map functionality has been deactivated under settings.',
			'ERROR_SEARCH_DEACTIVATED' => 'Search functionality has been deactivated under settings.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Προσπάθεια ξανά',

			'SETTINGS_SUCCESS_LOGIN' => 'Τα στοιχεία εισόδου ενημερώθηκαν.',
			'SETTINGS_SUCCESS_SORT' => 'Η Ταξινόμηση ενημερώθηκε.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Το κλειδί για το Dropbox ενημερώθηκε.',
			'SETTINGS_SUCCESS_LANG' => 'Η γλώσσα ενημερώθηκε',
			'SETTINGS_SUCCESS_LAYOUT' => 'Η διάταξη ενημερώθηκε',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Οι ρυθμίσεις επιφάνειας EXIF ενημερώθηκαν',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Η δημόσια αναζήτηση ενημερώθηκε',
			'SETTINGS_SUCCESS_LICENSE' => 'Η προεπιλεγμένη άδεια ενημερώθηκε',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Οι ρυθμίσεις εμφάνισης χάρτη ενημερώθηκαν',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Map display settings for public albums updated',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Map provider settings updated',

			'DB_INFO_TITLE' => 'Εισάγετε τις ρυθμίσεις της βάσης δεδομένων παρακάτω:',
			'DB_INFO_HOST' => 'Εξυπηρετητής Βάσης Δεδομένων (προαιρετικό)',
			'DB_INFO_USER' => 'Όνομα χρήστη Βάσης Δεδομένων',
			'DB_INFO_PASSWORD' => 'Κωδικός πρόσβασης Βάσης Δεδομένων',
			'DB_INFO_TEXT' => 'Το Lychee θα δημιουργήσει τη δικιά του βάση δεδομένων. Αν απατείται ωστόσο, μπορείτε να εισάγετε το όνομα μιας υπάρχουσας βάσης δεδομένων:',
			'DB_NAME' => 'Όνομα Βάσης Δεδομένων (προαιρετικό)',
			'DB_PREFIX' => 'Πρόθεμα στους πίνακες (προαιρετικό)',
			'DB_CONNECT' => 'Σύνδεση',

			'LOGIN_TITLE' => 'Εισάγετε ένα όνομα χρήστη και κωδικό πρόσβασης για την εγκατάστασή σας:',
			'LOGIN_USERNAME' => 'Νέο όνομα χρήστη',
			'LOGIN_PASSWORD' => 'Νέος κωδικός πρόσβασης',
			'LOGIN_PASSWORD_CONFIRM' => 'Επιβεβαίωση κωδικού πρόσβασης',
			'LOGIN_CREATE' => 'Δημιουργία στοιχείων εισόδου',

			'PASSWORD_TITLE' => 'Εισάγετε τον τρέχον κωδικό πρόσβασης:',
			'USERNAME_CURRENT' => 'Τρέχον Όνομα Χρήστη',
			'PASSWORD_CURRENT' => 'Τρέχον κωδικός πρόσβασης',
			'PASSWORD_TEXT' => 'Το όνομα χρήστη και ο κωδικός πρόσβασής σας θα αλλάξουν στα παρακάτω:',
			'PASSWORD_CHANGE' => 'Αλλαγή στοιχείων εισόδου',

			'EDIT_SHARING_TITLE' => 'Επεξεργασία κοινής χρήσης',
			'EDIT_SHARING_TEXT' => 'Οι ιδιότητες κοινής χρήσης αυτού του λευκώματος θα αλλάξουν στις παρακάτω:',
			'SHARE_ALBUM_TEXT' => 'Αυτό το λεύκωμα θα κοινοποιείται με τις παρακάτω ιδιότητες:',
			'ALBUM_SHARING_CONFIRM' => 'Αποθήκευση',

			'SORT_ALBUM_BY_1' => 'Ταξινόμηση λευκωμάτων κατά',
			'SORT_ALBUM_BY_2' => 'με',
			'SORT_ALBUM_BY_3' => 'σειρά.',

			'SORT_ALBUM_SELECT_1' => 'Ημερομηνία Δημιουργίας',
			'SORT_ALBUM_SELECT_2' => 'Τίτλος',
			'SORT_ALBUM_SELECT_3' => 'Περιγραφή',
			'SORT_ALBUM_SELECT_4' => 'Δημόσιο',
			'SORT_ALBUM_SELECT_5' => 'Νεότερη Ημερομηνία Λήψης',
			'SORT_ALBUM_SELECT_6' => 'Παλαιότερη Ημερομηνία Λήψης',

			'SORT_PHOTO_BY_1' => 'Ταξινόμηση Φωτογραφιών κατά',
			'SORT_PHOTO_BY_2' => 'με',
			'SORT_PHOTO_BY_3' => 'σειρά.',

			'SORT_PHOTO_SELECT_1' => 'Ημερομηνία Μεταφόρτωσης',
			'SORT_PHOTO_SELECT_2' => 'Ημερομηνία Λήψης',
			'SORT_PHOTO_SELECT_3' => 'Τίτλος',
			'SORT_PHOTO_SELECT_4' => 'Περιγραφή',
			'SORT_PHOTO_SELECT_5' => 'Δημόσιο',
			'SORT_PHOTO_SELECT_6' => 'Αστέρια',
			'SORT_PHOTO_SELECT_7' => 'Μορφή Φωτογραφίας',

			'SORT_ASCENDING' => 'Αύξουσα',
			'SORT_DESCENDING' => 'Φθίνουσα',
			'SORT_CHANGE' => 'Αλλαγή Ταξινόμησης',

			'DROPBOX_TITLE' => 'Ορισμός Κλειδιού Dropbox',
			'DROPBOX_TEXT' => "Για να μπορέσουμε να εισάγουμε φωτογραφίες από το δικό σας Dropbox, θα χρειαστείτε ένα έγκυρο κλειδί drop-ins app από <a href='https://www.dropbox.com/developers/apps/create'>την ιστοσελίδα του Dropbox</a>. Παράγετε ένα προσωπικό κλειδί και εισάγετέ το παρακάτω:",

			'LANG_TEXT' => 'Αλλαγή γλώσσας του Lychee για:',
			'LANG_TITLE' => 'Αλλαγή Γλώσσας',
			'PUBLIC_SEARCH_TEXT' => 'Να επιτρέπεται η δημόσια αναζήτηση:',
			'IMAGE_OVERLAY_TEXT' => 'Εμφάνιση overlay δεδομένων εξ ορισμού:',
			'OVERLAY_TYPE' => 'Δεδομένα που θα χρησιμοποιηθούν στο overlay εικόνας:',
			'OVERLAY_EXIF' => 'EXIF δεδομένα φωτογραφίας',
			'OVERLAY_DESCRIPTION' => 'Περιγραφή φωτογραφίας',
			'OVERLAY_DATE' => 'Ημερομηνία λήψης της φωτογραφίας',
			'MAP_DISPLAY_TEXT' => 'Εμφάνιση συντεταγμένων στον χάρτη (OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Enable maps for public albums (provided by OpenStreetMap):',
			'MAP_PROVIDER' => 'Provider of OpenStreetMap tiles:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Include photos of subalbums on map:',
			'LOCATION_DECODING' => 'Decode GPS data into location name',
			'LOCATION_SHOW' => 'Show location name',
			'LOCATION_SHOW_PUBLIC' => 'Show location name for public mode',
			'LAYOUT_TYPE' => 'Διάταξη φωτογραφιών:',
			'LAYOUT_SQUARES' => 'Τετράγωνες μικρογραφίες',
			'LAYOUT_JUSTIFIED' => 'Με ίσες αναλογίες',
			'LAYOUT_UNJUSTIFIED' => 'Με άνισες αναλογίες',
			'SET_LAYOUT' => 'Αλλαγή διάταξης',

			'VIEW_NO_RESULT' => 'Κανένα αποτέλεσμα',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Κανένα δημόσιο λεύκωμα',
			'VIEW_NO_CONFIGURATION' => 'Καμία ρύθμιση',
			'VIEW_PHOTO_NOT_FOUND' => 'Η φωτογραφία δεν βρέθηκε',

			'NO_TAGS' => 'Καμία ετικέτα',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Μπορείτε τώρα να διαχειριστείτε τις νέες φωτογραφίες σας.',
			'UPLOAD_COMPLETE' => 'Η μεταφόρτωση ολοκληρώθηκε',
			'UPLOAD_COMPLETE_FAILED' => 'Αποτυχία μεταφόρτωσης μιας ή περισσότερων φωτογραφιών.',
			'UPLOAD_IMPORTING' => 'Γίνεται εισαγωγή',
			'UPLOAD_IMPORTING_URL' => 'Εισαγωγή URL',
			'UPLOAD_UPLOADING' => 'Γίνεται μεταφόρτωση',
			'UPLOAD_FINISHED' => 'Ολοκληρώθηκε',
			'UPLOAD_PROCESSING' => 'Γίνεται επεξεργασία',
			'UPLOAD_FAILED' => 'Απέτυχε',
			'UPLOAD_FAILED_ERROR' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε ένα σφάλμα!',
			'UPLOAD_FAILED_WARNING' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε μία προειδοποίηση!',
			'UPLOAD_SKIPPED' => 'Παραλείφθηκε',
			'UPLOAD_ERROR_CONSOLE' => 'Παρακαλούμε ρίξτε μια ματιά στην κονσόλα του περιηγητή σας για περισσότερες λεπτομέρειες.',
			'UPLOAD_UNKNOWN' => 'Ο εξυπηρετητής επέστρεψε μία άγνωστη απόκριση. Παρακαλούμε ρίξτε μια ματιά στην κονσόλα του περιηγητή σας για περισσότερες λεπτομέρειες.',
			'UPLOAD_ERROR_UNKNOWN' => 'Η μεταφόρτωση απέτυχε. Ο εξυπηρετητής επέστρεψε ένα άγνωστο σφάλμα!',
			'UPLOAD_IN_PROGRESS' => 'Το Lychee αυτή τη στιγμή μεταφορτώνει!',
			'UPLOAD_IMPORT_WARN_ERR' => 'Η εισαγωγή ολοκληρώθηκε, αλλά επέστρεψε προειδοποιήσεις ή σφάλματα. Παρακαλούμε ρίξτε μια ματία στις καταγραφές (Ρυθμίσεις -> Εμφάνιση Καταγραφών) για περισσότερες λεπτομέρειες.',
			'UPLOAD_IMPORT_COMPLETE' => 'Η εισαγωγή ολοκληρώθηκε',
			'UPLOAD_IMPORT_INSTR' => 'Παρακαλούμε εισάγετε τον απευθείας σύνδεσμο μιας φωτογραφίας για να την εισάγετε:',
			'UPLOAD_IMPORT' => 'Εισαγωγή',
			'UPLOAD_IMPORT_SERVER' => 'Γίνεται εισαγωγή από εξυπηρετητή',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Ο φάκελος είναι άδειος ή μη αναγνώσιμα αρχεία προς επεξεργασία. Παρακαλούμε ρίξτε μια ματία στις καταγραφές (Ρυθμίσεις -> Εμφάνιση Καταγραφών) για περισσότερες λεπτομέρειες.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Αυτή η ενέργεια θα εισάγει όλες τις φωτογραφίες, φακέλους και υπο-φακέλους οι οποίοι βρίσκονται στον παρακάτω κατάλογο.',
			'UPLOAD_ABSOLUTE_PATH' => 'Απόλυτη διαδρομή του καταλόγου',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Δεν ήταν δυνατό να ξεκινήσει η διαδικασία εισαγωγής, διότι ο κατάλογος ήταν άδειος!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Διαγραφή πρωτότυπων',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Αν είναι εφικτό τα πρωτότυπα αρχεία θα διαγραφούν αφού ολοκληρωθεί η εισαγωγή τους.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Κατάσταση χαμηλής μνήμης!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Η διεργασία εισαγωγής στον εξυπηρετητή πλησιάζει τα όρια μνήμης και μπορεί να τερματιστεί πρόωρα.',
			'UPLOAD_WARNING' => 'Προειδοποίηση',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Η δοθείσα διαδρομή δεν είναι ένας αναγνώσιμος κατάλογος!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Η δοθείσα διαδρομή χρησιμοποιείται από το Lychee!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Δεν ήταν δυνατή η ανάγνωση του αρχείου!',
			'UPLOAD_IMPORT_FAILED' => 'Δεν ήταν δυνατή η εισαγωγή του αρχείου!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Μη υποστηριζόμενος τύπος αρχείου!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Δεν ήταν δυνατή η δημιουργία του λευκώματος!',

			'ABOUT_SUBTITLE' => 'Αυτό-φιλοξενούμενη διαχείριση φωτογραφιών καμωμένη σωστά',
			'ABOUT_DESCRIPTION' => 'είναι ένα δωρεάν εργαλείο διαχείρισης φωτογραφιών, το οποίο "τρέχει" στον δικό σας εξυπηρετητή ή δικτυακό-χώρο. Εγκαθίσταται σε μερικά δευτερόλεπτα. Μεταφορτώστε, διαχειριστείτε και κοινοποιήστε φωτογραφίες σαν από εγκατεστημένη εφαρμογή. Το Lychee παρέχεται με όλες τις λειτουργίες που χρειάζεστε και όλες οι φωτογραφίες σας είναι αποθηκευμένες με ασφάλεια.',
			'FOOTER_COPYRIGHT' => 'Όλες οι εικόνες σε αυτή την ιστοσελίδα υπόκεινται σε πνευματικά δικαιώματα από ',
			'HOSTED_WITH_LYCHEE' => 'Φιλοξενείται από το Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Αντιγραφή στο πρόχειρο',
			'URL_COPIED_TO_CLIPBOARD' => 'Η διεύθυνση URL αντιγράφηκε στο πρόχειρο!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Απευθείας σύνδεσμοι στα αρχεία εικόνων:',
			'PHOTO_MEDIUM' => 'Μέτρια',
			'PHOTO_MEDIUM_HIDPI' => 'Μέτρια HiDPI',
			'PHOTO_SMALL' => 'Μικρογραφία',
			'PHOTO_SMALL_HIDPI' => 'Μικρογραφία HiDPI',
			'PHOTO_THUMB' => 'Τετράγωνη Μικρογραφία',
			'PHOTO_THUMB_HIDPI' => 'Τετράγωνη Μικρογραφία HiDPI',
			'PHOTO_LIVE_VIDEO' => 'Video part of live-photo',
			'PHOTO_VIEW' => 'Lychee Προβολή Φωτογραφιών:',
		];

		return $locale;
	}
}