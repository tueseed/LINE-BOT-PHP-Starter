<?php
$access_token = '0RwNgVKTtKL8buW0dJpvxx5e5sRgKt1r9ntdO+YkiZHdlZb5f/F5PI2YQphJJo243Ji/Bh51fGVTuu1n/piK4+gDLxtf2mj+Xrq7okZBvsMgmr41tuMpa+vNP9QFet0wZgMYnfgxWOmkLbebV7VJXQdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
           // $csv = array_map('str_getcsv', file('sta.csv'));
           // $findName = iconv("utf-8","tis-620",$text);
			//$findName = strtoupper($findName);
//            foreach($csv as $values)
  //          {
		    
    //         if($values[1]==$findName or $values[2]==$findName)   // index 0 contains the name
      //           $Myd = iconv("tis-620","utf-8",$values[0]);  // index 1 contains the googlemap link    
	//		 }
			 
                // Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => "dfdkakl;j"//$Myd    //."  [".$KVA." KVA]"
				//'type' => 'template',
				//'altText' => "this is a buttons template",				
				//'template'{
			//	'type' => 'buttons',
			//	'text' => "กรุณาเลือก",
			//	'actions'= [
                                             {
                            //                  'type'=> 'message',
                         //                     'label'=> "Buy",
                            //                  'text'=> "action=buy&itemid=123"
                        //                         },
                                //               {
                                  //             'type'=> 'message',
                                    //           'label'=> "Add to cart",
                                      //        'text'=> "action=add&itemid=124"
                                        //         },
                                          //            ];
			//	}
				
			];
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		
			
		}
	}
}
echo "OK";
