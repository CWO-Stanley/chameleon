<!DOCTYPE html><html><head>
{literal}
<script name="kiwiconfig">
window.kiwiConfig = function kiwiConfig() {
        console.log('off');
        return {
		"startupScreen": "{/literal}{if $metadata['kiwi_asl'] == 'true'}plugin-asl{else}welcome{/if}{literal}",
		"windowTitle": "..::example - #{/literal}{$metadata['name']}{literal}::.. The web IRC client",
		"kiwiServer": "https://gateway.example.nl:1085/webirc/kiwiirc/",
		"theme": "CWO",
		"disconnectOnSaslFail": false,
		"themes": [
				{ "name": "CWO", "url": "static/themes/cwo-chameleon-kiwiirc4" }
				],
		"showColorPicker": true,
		"startupOptions": { 
				"server": "irc.example.nl", 
				"infoBackground": "{/literal}{if $metadata['bgurl'] != ''}{$metadata['bgurl']}{else}cwobg.jpg{/if}{literal}", 
				"infoContent": "<a class=\"netlogo\" href=\"https://chameleon.example.nl\"><span></span><img src=\"https://atsiofrjlo.cloudimg.io/v7/https://example.nl/wp-content/uploads/2018/10/cropped-c4all.png\"></a><div><a href=\"https://chameleon.example.nl/register.php\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-lock\"></i> Registreer</a><a href=\"https://chameleon.example.nl/chat.php?id=1\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> Helpdesk</a><a href=\"https://wiki.example.nl/\" target=\"_blank\" class=\"u-cpanel\"><i class=\"fa fa-life-ring\"></i> CWO Wiki</a></div>",
				"greetingText": "<div style='margin:0px 0px 0px 0px'><center><a class=\"netlogo\" href=\"https://chameleon.example.nl\"><span></span><img src=\"https://atsiofrjlo.cloudimg.io/v7/https://example.nl/wp-content/uploads/2018/10/cropped-c4all.png\" height='60px'></a></center></div>",
				"state_key": "CWO-Chameleon-43",
				"buttonText": "<center><i class='fa fa-sign-in' style='margin-right:5px !important;'></i> Chatten</center>",
				"gecos": "..::example Chameleon HTML5 Webchat::..",
				"port": 6697, 
				"tls": true, 
				"direct": false, 
				"recaptchaSiteId": "6LdZ_nIUAAAAANK_JiB2qsRbSPnldqaYTjFwNj8G",
				"channel": "#{/literal}{$metadata['name']}{literal}",
				"age": "",
				"sex": "",
				"location": "",
				"remember_buffers": true, 
				"nick": "" 
			},
		"sidebarDefault": "nicklist",
		"buffers": {
				{/literal}{if $metadata['private'] == "true"}{literal}"block_pms": false, {/literal}{/if}{literal}
				"coloured_nicklist": false,
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}"nicklist_avatars": true, {/literal}{else}{literal}"nicklist_avatars": false,{/literal}{/if}{literal}
				{/literal}{if $metadata['hostnames'] == "true"}{literal}"show_hostnames": true, {/literal}{else}{literal}"show_hostnames": false,{/literal}{/if}{literal}
				"colour_nicknames_in_messages": false,
				"inline_link_auto_previews": false,
				"inline_link_auto_preview_whitelist": ".*",
				"messageLayout": "modern",
				"default_kick_reason": "Gedraag je!",
				"share_typing": true
			},
		"plugins": [
			{/literal}{if $metadata['webcam'] == "true"}{literal}
			{
				"name": "conference",
				"url": "static/plugins/conference/plugin-conference.min.js?v=1.2"
			},
			{/literal}{/if}{literal}
				{"name": "emoji", "url": "static/plugins/plugin-emoji-prelim.min.js"},
				{"name": "simosnapcss","url": "static/plugins/cwo-css3.html"},
				
				{/literal}{if $metadata['radio'] == "true" && $metadata['radio_player'] == "internal"}{literal}
				{"name": "plugin-radio","url": "static/plugins/plugin-radio.html"},
				{/literal}{/if}{literal}
				{"name": "nickserv", "url": "static/plugins/plugin-nickserv.js"},
				{ "name": "font", "url": "static/plugins/font-size.html" },
				{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
				{"name": "gravatar", "url": "static/plugins/plugin-gravatar.js"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_giphy'] == "true"}{literal}
				{"name": "giphy", "url": "static/plugins/plugin-giphy.html"},
				{/literal}{/if}{literal}
				{/literal}{if $metadata['kiwi_imgur'] == "true"}{literal}
				{"name": "imgurl", "url": "static/plugins/plugin-imgur.html"},
				{/literal}{/if}{literal}
				{"name": "ident", "url": "static/plugins/ident.js?v=1.2"},
				{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
				{"name": "fileuploader", "url": "static/plugins/plugin-fileuploader.js?v=1.1"},
				{/literal}{/if}{literal}
				{"name": "asl","url": "static/plugins/plugin-asl.js?cb=22"}
		],
		{/literal}{if $metadata['kiwi_asl'] == 'true'}{literal}
		"plugin-asl" : {
					"gecosType": 2,
					"showRealname": false,
					"showUserBrowser": true,
					"userBrowserIcon": "fa-heart",
					"fallbackColour": "",
					"singleLineUserbox": false,
					"singleLineString": {
						"age": "%a jaar oud",
						"sex": "%s",
						"location": "%l",
						"separator": " "
					},
					"ageRanges": [
						{ "name": "_all", "value": "all" },
						{ "name": "< 25", "value": "<25" },
						{ "name": "25 - 45", "value": "25-46" },
						{ "name": "> 45", "value": ">45" }
					],
					"sexes": {
						"_male": { "chars": "M", "colour": "#00F" },
						"_female": { "chars": "F", "colour": "#F0F" },
						"_other": { "chars": "O", "colour": "#0F0" }
					},
					"queryKeys": {
						"age": "age",
						"sex": "sex",
						"location": "location",
						"realname": "realname"
					},
					"localesPath": "static/plugins/plugin-asl/locales/"
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['kiwi_avatar'] == "true"}{literal}
		"plugin-gravatar": {
					"gatewayURL": "//gateway.example.nl:1085/",
					"gravatarURL": "//www.gravatar.com/avatar/",
					"gravatarRating": "g",
					"gravatarFallback": "robohash"
		},
		{/literal}{/if}{literal}
		{/literal}{if $metadata['webcam'] == "true"}{literal}
		"conference":{ 
				"server": "meet.example.nl",
				"secure": false,
				"enabledInChannels": [ "*" ],
				"joinText": "heeft de mediaconferentie opgestart.",
				"inviteText": "is inviting you to a private call.",
				"joinButtonText": "Join nu!",
				"disabledText": "Sorry. The sysop has not enabled conferences in this channel.",
				"showLink": false,
				"useBitlyLink": false,
				"queries": false,
				"bitlyAccessToken": "BITLY_API_KEY_HERE",
				"interfaceConfigOverwrite": {
					"SHOW_JITSI_WATERMARK": true,
					"SHOW_WATERMARK_FOR_GUESTS": true,
					"SHOW_BRAND_WATERMARK": true,
					"BRAND_WATERMARK_LINK": "https://example.nl/",
					"JITSI_WATERMARK_LINK": "https://example.nl",
					"MOBILE_APP_PROMO": true,
					"DEFAULT_REMOTE_DISPLAY_NAME": "",
					"VERTICAL_FILMSTRIP": false,
					"LANG_DETECTION": true,
					"TOOLBAR_BUTTONS": [
								"microphone", "camera", "fullscreen", "fodeviceselection", "hangup",
								"settings", "videoquality", "filmstrip",
								"stats", "shortcuts", "sharedvideo"
					]
				},
				"configOverwrite": {
				}
		},
		{/literal}{/if}{literal}
		"plugin-radio": {
				"url": "stations.php?id={/literal}{$smarty.get.id}{literal}"
		},
		{/literal}{if $metadata['kiwi_upload'] == "true"}{literal}
		"fileuploader": {
			"server": "https://files.example.nl/files/",
			"maxFileSize": 10485760,
			"note": "Let op, deze bestanden blijven maximaal 24 uur bestaan!"
		},
		{/literal}{/if}{literal}
		"embedly": {
			"key": "aae4890b796c49dbbc079001e2f9d8e5"
			}
	}
}
</script>
{/literal}