# nostr-NIP05-php
Dynamically provide NIP-05 nostr identifiers on your domain using PHP.

1. Open nostr.php file

2. Edit this section of code to add your usernames.

`$user_list = array(
	"MrOstrich" => "hex_string",
	"twentyonemillion" => "hex_string2"
);`

3. Get the npub for your username and paste into https://damus.io/key/

4. Grab the resulting hex key and paste into the nostr.php file where you see "hex_string".

5. Navigate to the public root folder of your domain web hosting. This might be httpdocs, httpsdocs, public_html, or something similar. Create a folder named **.well-known**

6. Save two files .htaccess and nostr.php to the .well-known folder.

7. Add your NIP-05 identifier to your nostr client, ie MrOstrich@mydomain.com
