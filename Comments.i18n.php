<?php
/**
 * Internationalization file for the Comments extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author David Pean <david.pean@gmail.com>
 */
$messages['en'] = array(
	'comments-comment' => 'Comment',
	'comments-desc' => 'Adds <code>&lt;comments&gt;</code> parser hook that allows commenting on pages',
	'comments-db-locked' => '<h3>Adding comments</h3>The database is currently locked for routine database maintenance, after which it will be back to normal. Please check back later!',
	'comments-voted-label' => 'Voted',
	'comments-loading' => 'Loading...',
	'comments-auto-refresher-enable' => 'Enable comment auto-refresher',
	'comments-auto-refresher-pause' => 'Pause comment auto-refresher',
	'comments-reply-to' => 'Reply to',
	'comments-cancel-reply' => 'Cancel',
	'comments-block-warning-anon' => 'Are you sure you want to permanently ignore all comments from this anonymous user (via their IP address)?',
	'comments-block-warning-user' => 'Are you sure you want to permanently ignore all comments from user $1?',
	'comments-delete-warning' => 'Are you sure you want to delete this comment?',
	'comments-sort-by-date' => 'Sort by date',
	'comments-sort-by-score' => 'Sort by score',
	'comments-show-comment-link' => 'Show comment',
	'comments-manage-blocklist-link' => 'Manage ignore list',
	'comments-ignore-message' => 'You are ignoring the author of this comment',
	'comments-you' => 'You',
	'comments-reply' => 'Reply',
	'comments-login-required' => 'You must be logged in to add comments',
	'comments-not-allowed' => 'You are not allowed to post comments.',
	'comments-post' => 'Post comment',
	'comments-submit' => 'Add your comment',
	'comments-score-text' => 'Score',
	'comments-permalink' => 'Permalink',
	'comments-delete-link' => 'Delete comment',
	'comments-anon-name' => 'Anonymous user',
	'comments-anon-message' => '{{SITENAME}} welcomes <b>all comments</b>. If you do not want to be anonymous, <a href="$1">register</a> or <a href="$2">log in</a>. It is free.',
	'comments-links-are-forbidden' => 'External links in comments are forbidden!',
	'comments-is-spam' => 'Submitted text of the comment was interpreted as spam.',
	'comments-ignore-item' => '<a href="$1">$2</a> on $3 <a href="$4">(unblock)</a>',
	'comments-ignore-no-users' => 'There are no users currently blocked.',
	'comments-ignore-remove-message' => 'Are you sure you want to unblock user <b>$1</b>\'s comments?',
	'comments-ignore-unblock' => 'Unblock',
	'comments-ignore-cancel' => 'Cancel',
	'comments-ignore-title' => 'Comment ignore list',
	'commentignorelist' => 'Comment ignore list',
	'comments-no-comments-of-day' => 'There are no comments of the day.', // for the <commentsoftheday/> parser hook
	'log-name-comments' => 'Comments log',
	'log-description-comments' => 'This is a log of comments.',
	'logentry-comments-add' => '$1 posted a new comment on $3',
	'logentry-comments-delete' => '$1 deleted comment #$4 on $3',
	'comments-time-ago' => '$1 ago',
	'comments-time-days' => '{{PLURAL:$1|one day|$1 days}}',
	'comments-time-hours' => '{{PLURAL:$1|one hour|$1 hours}}',
	'comments-time-minutes' => '{{PLURAL:$1|one minute|$1 minutes}}',
	'comments-time-seconds' => '{{PLURAL:$1|one second|$1 seconds}}',
	'log-show-hide-comments' => '$1 comment log', // For Special:Log
	// For Special:ListUsers - new commentadmin group
	'group-commentadmin' => 'Comment administrators',
	'group-commentadmin-member' => '{{GENDER:$1|comment administrator}}',
	'grouppage-commentadmin' => '{{ns:project}}:Comment administrators',
	// For Special:ListGroupRights
	'right-comment' => 'Submit comments',
	'right-commentadmin' => 'Administrate user-submitted comments',
	'right-commentlinks' => 'Use external links in comments',
);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author Darth Kule
 * @author Nike
 * @author Purodha
 * @author Raymond
 * @author Shirayuki
 * @author Siebrand
 */
$messages['qqq'] = array(
	'comments-comment' => 'This message might be unused.
{{Identical|Comment}}',
	'comments-desc' => '{{desc|name=Comments|url=http://www.mediawiki.org/wiki/Extension:Comments}}',
	'comments-db-locked' => 'Displayed if a page contains the <code><nowiki><comments /></nowiki></code> tag while the database is locked.',
	'comments-voted-label' => 'Shown when you have voted (either thumbs up or thumbs down) for a given comment',
	'comments-loading' => '{{Identical|Loading}}',
	'comments-auto-refresher-enable' => 'Auto-refresher is a feature where a page with the <code><nowiki><comments /></nowiki></code> tag is automatically refreshed for new comments.

Refer to the [[mw:File:Comments.png|image]] for details.',
	'comments-auto-refresher-pause' => 'Auto-refresher is a feature where a page with the <code><nowiki><comments /></nowiki></code> tag is automatically refreshed for new comments.

Refer to the [[mw:File:Comments.png|image]] for details.',
	'comments-reply-to' => 'This message is followed by the user\'s username whom you\'re about to reply to. For example, "Reply to Jack Phoenix".',
	'comments-cancel-reply' => 'Used as link text in JavaScript code.
{{Identical|Cancel}}',
	'comments-block-warning-anon' => '{{doc-singularthey}}
Displayed in a JavaScript popup alert when the user is about to ignore the comments of an anonymous user.',
	'comments-block-warning-user' => "Displayed in a JavaScript pop-up alert when the user is about to ignore a registered user's comments.

Parameters:
* $1 - the user name of the user whose comments we're about to ignore; can be used for GENDER",
	'comments-delete-warning' => "Displayed in a JavaScript popup alert when the user is about to delete someone's comment.",
	'comments-sort-by-date' => 'Drop-down menu item; refer to the [[mw:File:Comments.png|image]] for details',
	'comments-sort-by-score' => 'Drop-down menu item; refer to the [[mw:File:Comments.png|image]] for details',
	'comments-show-comment-link' => 'When a user who is on your comment ignore list has posted a comment, you are shown an explanation ([[MediaWiki:Comment-ignore-message]]) and options on what to do. Clicking on this link will show the hidden comment.',
	'comments-manage-blocklist-link' => 'When a user who is on your comment ignore list has posted a comment, you are shown an explanation ({{msg-mw|Comments-ignore-message}}) and options on what to do ({{msg-mw|Comments-show-comment-link}} and this message). Clicking on this link will take you to Special:CommentIgnoreList, where you can remove people from your comment ignore list.',
	'comments-ignore-message' => "Shown in the output of the <comments /> tag instead of the person's comment if you're ignoring the said person.",
	'comments-you' => 'Refer to the [[mw:File:Comments.png|image]] for details.',
	'comments-reply' => '{{Identical|Reply}}',
	'comments-login-required' => 'Shown when the user does not have the "comment" user right and they are logged out but a page contains the <code><nowiki><comments /></nowiki></code> tag.',
	'comments-not-allowed' => 'Shown when the user does not have the "comment" user right but a page contains the <code><nowiki><comments /></nowiki></code> tag.',
	'comments-post' => 'Button text, clicking on this button submits your comment; refer to the [[mw:File:Comments.png|image]] for details',
	'comments-submit' => 'This text is shown above the comment form (the form where you can submit your own comment(s)); refer to the [[mw:File:Comments.png|image]] for details',
	'comments-score-text' => "Followed by the comment's score; refer to the [[mw:File:Comments.png|image]] for details",
	'comments-permalink' => '"Permalink" means "permanent link" and clicking on it creates what is a permanent link to a comment, at least until a (comment) administrator deletes the comment or the whole page gets deleted or the <code><nowiki><comments /></nowiki></code> tag is removed from it.
{{Identical|Permalink}}',
	'comments-delete-link' => 'Link text; clicking on this deletes the comment (duh)',
	'comments-anon-name' => "Generic name shown for anonymous (not logged in/unregistered) users, since their IP addresses aren't directly exposed.
{{Identical|Anonymous user}}",
	'comments-anon-message' => 'Shown above the comment form to anonymous users.
Parameters:
* $1 - the URL to [[Special:UserLogin]]
* $2 - the URL to [[Special:UserLogin/signup]]',
	'comments-links-are-forbidden' => "Error message shown to the user if they tried to post a comment that contains external links and they don't have the commentlinks user right.",
	'comments-is-spam' => "Error message shown to the user if they try to post a comment that matches the spam filter and they're not a member of the commentadmin group.",
	'comments-ignore-item' => "Shown on Special:CommentIgnoreList. Parameters:
* $1 - the URL to the blocked user's user page
* $2 - the name of the blocked user
* $3 - the timestamp (when the user was blocked) (format: Y-m-d H:i:s)
* $4 - the URL to the unblock form",
	'comments-ignore-no-users' => "Shown on Special:CommentIgnoreList if you haven't blocked anyone's comments.",
	'comments-ignore-remove-message' => "Confirmation message, shown when the user is about to unblock someone's comments on Special:CommentIgnoreList.

Parameters:
* $1 - the username of the user whose comments the user has blocked",
	'comments-ignore-unblock' => 'Used as Submit button text.
{{Identical|Unblock}}',
	'comments-ignore-cancel' => 'Used as Cancel button text.
{{Identical|Cancel}}',
	'comments-ignore-title' => 'Title of Special:CommentIgnoreList, as shown on the said page.',
	'commentignorelist' => "{{doc-special|CommentIgnoreList}}
The comment ignore list contains a list of users whose comments you are ignoring; an ignored comment won't show up by default and you have to click on a special link to view it",
	'comments-no-comments-of-day' => 'Shown as the output of the <code><nowiki><commentsoftheday /></nowiki></code> parser hook if there are no comments of the day.',
	'log-name-comments' => 'Shown on the dropdown on [[Special:Log]].',
	'log-description-comments' => 'Explanation of the comments log, shown on [[Special:Log/comments]].',
	'logentry-comments-add' => 'Parameters:
* $1 - contains the user name + talk/block/contribs links, as is the standard with log entries nowadays
* $2 - (Optional) username, for <nowiki>{{GENDER}}</nowiki> support
* $3 - a wikilink to the page where the comment was posted; it contains a fragment that directly points to the new comment in question, i.e. [[Talk:Main Page#comment-10]] (the number is the internal comment identifier)',
	'logentry-comments-delete' => "Parameters:
* $1 - contains the user name + talk/block/contribs links, as is the standard with log entries nowadays
* $2 - (Optional) username, for <nowiki>{{GENDER}}</nowiki> support
* $3 - a wikilink to the page where the comment was originally posted (and as opposed to the {{msg-mw|Logentry-comments-add}} message, it does '''not''' contain a fragment)
* $4 - the internal comment ID",
	'comments-time-ago' => 'Parameters:
* $1 - the duration (e.g. "{{int:comments-time-minutes|1}} {{int:comments-time-seconds|42}} "), uses the following messages:
** {{msg-mw|comments-time-days}}
** {{msg-mw|comments-time-hours}}
** {{msg-mw|comments-time-minutes}}
** {{msg-mw|comments-time-seconds}}
{{Identical|Ago}}',
	'comments-time-days' => 'Used as the duration in {{msg-mw|Comments-time-ago}}.

Parameters:
* $1 - number of days
See also:
* {{msg-mw|Comments-time-hours}}
* {{msg-mw|Comments-time-minutes}}
* {{msg-mw|Comments-time-seconds}}
{{Identical|Day}}',
	'comments-time-hours' => 'Used as the duration in {{msg-mw|Comments-time-ago}}.

Parameters:
* $1 - number of hours
See also:
* {{msg-mw|Comments-time-days}}
* {{msg-mw|Comments-time-minutes}}
* {{msg-mw|Comments-time-seconds}}',
	'comments-time-minutes' => 'Used as the duration in {{msg-mw|Comments-time-ago}}.

Parameters:
* $1 - number of minutes
See also:
* {{msg-mw|Comments-time-days}}
* {{msg-mw|Comments-time-hours}}
* {{msg-mw|Comments-time-seconds}}
{{Identical|Minute}}',
	'comments-time-seconds' => 'Used as the duration in {{msg-mw|Comments-time-ago}}.

Parameters:
* $1 - number of seconds
See also:
* {{msg-mw|Comments-time-days}}
* {{msg-mw|Comments-time-hours}}
* {{msg-mw|Comments-time-minutes}}
{{Identical|Second}}',
	'log-show-hide-comments' => 'For [[Special:Log]]. Parameters:
* $1 - one of {{msg-mw|Show}} or {{msg-mw|Hide}}
{{Related|Log-show-hide}}',
	'group-commentadmin' => "Shown on [[Special:ListUsers]]. Members of this group can delete other users' comments.
{{doc-group|commentadmin}}",
	'group-commentadmin-member' => 'Member of the Comment Administrators (commentadmin) group, shown on [[Special:ListUsers]].
{{doc-group|commentadmin|member}}',
	'grouppage-commentadmin' => '{{doc-group|commentadmin|page}}',
	'right-comment' => '{{doc-right|comment}}',
	'right-commentadmin' => '{{doc-right|commentadmin}}',
	'right-commentlinks' => '{{Doc-right|commentlinks}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'comments-comment' => 'Opmerking',
	'comments-voted-label' => 'Gestem',
	'comments-loading' => 'Laai...',
	'comments-cancel-reply' => 'Kanselleer',
	'comments-you' => 'U',
	'comments-reply' => 'Antwoord',
	'comments-ignore-cancel' => 'Kanselleer',
	'comments-time-minutes' => '{{PLURAL:$1|$1 minuut|$1 minute}}',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 */
$messages['as'] = array(
	'comments-comment' => 'মন্তব্য',
	'comments-voted-label' => 'ভোট দিয়া হ’ল',
	'comments-loading' => "ল'ড হৈ আছে…",
	'comments-cancel-reply' => 'বাতিল কৰক',
	'comments-show-comment-link' => 'মন্তব্য দেখুৱাওক',
	'comments-you' => 'আপুনি',
	'comments-reply' => 'উত্তৰ',
	'comments-post' => 'মন্তব্য প্ৰেৰণ কৰক',
	'comments-submit' => 'আপোনাৰ মন্তব্য যোগ দিয়ক',
	'comments-score-text' => 'নম্বৰ',
	'comments-permalink' => 'স্থায়ী সংযোগ',
	'comments-delete-link' => 'মন্তব্য বিলোপ কৰক',
	'comments-ignore-unblock' => 'প্ৰতিবন্ধক উঠাই লওক',
	'comments-ignore-cancel' => 'বাতিল কৰক',
	'log-name-comments' => 'মন্তব্য অভিলেখ',
	'comments-time-ago' => '$1 আগেয়ে',
	'comments-time-days' => '{{PLURAL:$1|$1 দিন|$1 দিন}}', # Fuzzy
	'comments-time-hours' => '{{PLURAL:$1|$১ ঘন্টা|$১ ঘন্টা}}', # Fuzzy
	'comments-time-minutes' => '{{PLURAL:$1|$১ মিনিট|$১ মিনিট}}', # Fuzzy
	'comments-time-seconds' => '{{PLURAL:$1|$১ ছেকেণ্ড |$১ ছেকেণ্ড}}',
	'right-comment' => 'মন্তব্য জমা দিয়ক',
);

/** South Azerbaijani (تورکجه)
 * @author පසිඳු කාවින්ද
 */
$messages['azb'] = array(
	'comments-cancel-reply' => 'لغو ائت',
	'comments-score-text' => 'امتیاز',
	'comments-ignore-cancel' => 'لغو ائت',
);

/** Bashkir (башҡортса)
 * @author Ләйсән
 */
$messages['ba'] = array(
	'comments-comment' => 'Аңлатма',
	'comments-voted-label' => 'Тауыш бирҙе',
	'comments-loading' => 'Тейәү',
	'comments-reply-to' => 'Яуап бирергә',
	'comments-cancel-reply' => 'Кире алырға',
	'comments-show-comment-link' => 'Аңлатманы күрһәтергә',
	'comments-you' => 'Һеҙ',
	'comments-reply' => 'Яуап бирергә',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'comments-comment' => 'Komento',
	'comments-desc' => 'Minadugang <code>&lt;comments&gt;</code> pangawil na parabangay na minatugot sa pagkomento nin mga pahina',
	'comments-db-locked' => '<h3>Pagdudugang nin mga komento</h3>An datos-sarayan sa ngunyan nakakandado para sa minsanang pagpapakarhay kan datos-sarayan, pagkatapos kaini ibabalik sa normal. Tabi man pakirikisa giraray aro-atyan!',
	'comments-voted-label' => 'Nagboto na',
	'comments-loading' => 'Ikinakarga...',
	'comments-auto-refresher-enable' => 'Paganahon an awtomatikong pagpanumpayan nin komento',
	'comments-auto-refresher-pause' => 'Iuntok nguna an awtomatikong pagpanumpayan nin komento',
	'comments-reply-to' => 'Magsimbag sa',
	'comments-cancel-reply' => 'Kanselaron',
	'comments-block-warning-anon' => 'Segurado ka daw na muya mo na permanenteng pabayaan an gabos na mga komento na gikan sa dae pa nabibistong paragamit na ini (sa paagi kan saiyang estada nin IP)?',
	'comments-block-warning-user' => 'Segurado ka daw na muya mo na permanenteng pabayaan an gabos na mga komento na gikan sa dae pa nabibistong paragamit na si $1?',
	'comments-delete-warning' => 'Segurado ka daw na muya mong puraon ining komento?',
	'comments-sort-by-date' => 'Salansanon sa paagi nin petsa',
	'comments-sort-by-score' => 'Salansanon sa paagi nin iskor',
	'comments-show-comment-link' => 'Ipahiling an komento',
	'comments-manage-blocklist-link' => 'Manihooon an pinabayaang listahan',
	'comments-ignore-message' => 'Saimong pinapabayaan an kagsurat kaining komento',
	'comments-you' => 'Ika',
	'comments-reply' => 'Kasimbagan',
	'comments-login-required' => 'Ika dapat nakalaog na tanganing makadugang nin mga komento',
	'comments-not-allowed' => 'Ika dae tinutugutan na magpaskil nin mga komento.',
	'comments-post' => 'Ipaskil an komento',
	'comments-submit' => 'Idugang an saimong komento',
	'comments-score-text' => 'Iskor',
	'comments-permalink' => 'Permanente-na-sugpon',
	'comments-delete-link' => 'Puraon an komento',
	'comments-anon-name' => 'Dai midbid na paragamit',
	'comments-anon-message' => '{{SITENAME}} maogmang minatugot <b>sa gabos na mga komento</b>. Kun ika habo na dae midbid, <a href="$1">magparehistro</a> o baya <a href="$2">maglaog</a>. Ini tabi libre.',
	'comments-ignore-item' => '<a href="$1">$2</a> kan $3 <a href="$4">(dae kubkubon)</a>',
	'comments-ignore-no-users' => 'Mayo nin mga paragamit na sa ngunyan pinagkubkob.',
	'comments-ignore-remove-message' => 'Segurado ka na muya mo na dae na pagkubkubon an mga komento kan paragamit na si <b>$1</b>?',
	'comments-ignore-unblock' => 'Dae pagkubkubon',
	'comments-ignore-cancel' => 'Kanselaron',
	'comments-ignore-title' => 'Listahan kan pinabayaang komento',
	'commentignorelist' => 'Listahan kan pinabayaang komento',
	'comments-no-comments-of-day' => 'Mayo nin mga komento kan aldaw.',
	'log-name-comments' => 'Talaan nin mga komento',
	'log-description-comments' => 'Ini sarong talaan nin mga komento.',
	'logentry-comments-add' => '$1 nagpaskil nin sarong baguhong komento kan $3',
	'logentry-comments-delete' => '$1 pinagpura an komento na #$4 kan $3',
	'comments-time-ago' => '$1 nakaagi',
	'comments-time-days' => '{{PLURAL:$1|sarong aldaw|$1 na mga aldaw}}',
	'comments-time-hours' => '{{PLURAL:$1|sarong oras|$1 na mga oras}}',
	'comments-time-minutes' => '{{PLURAL:$1|sarong minuto|$1 minutos}}',
	'comments-time-seconds' => '{{PLURAL:$1|sarong segundo|$1 segundos}}',
	'log-show-hide-comments' => '$1 talaan nin komento',
	'group-commentadmin' => 'Mga administrador nin komento',
	'group-commentadmin-member' => '{{GENDER:$1|administrador in komento}}',
	'grouppage-commentadmin' => '{{ns:project}}:Mga administrador in Komento',
	'right-comment' => 'Isumite an mga komento',
	'right-commentadmin' => 'Administraron an mga pinagsumiteng mga komento nin paragamit',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'comments-comment' => 'Камэнтары',
	'comments-desc' => 'Дадае ў парсэр падтрымку <code>&lt;comments&gt;</code> для падтрымкі камэнтараў на старонках',
	'comments-db-locked' => '<h3>Уключэньне камэнтаваньня</h3>База зьвестак у гэты момант заблякаваная для апрацоўкі, пасьля якой усё будзе вернута як было. Калі ласка, завітайце пазьней!',
	'comments-voted-label' => 'Прагаласавалі',
	'comments-loading' => 'Загрузка...',
	'comments-auto-refresher-enable' => 'Уключыць аўтаабнаўленьне камэнтараў',
	'comments-auto-refresher-pause' => 'Прыпыніць аўтаабнаўленьне камэнтараў',
	'comments-reply-to' => 'Адказаць',
	'comments-cancel-reply' => 'Скасаваць',
	'comments-block-warning-anon' => 'Ці вы ўпэўненыя, што жадаеце ігнараваць усе камэнтары ад гэтага ананіма (паводле IP-адрасу)?',
	'comments-block-warning-user' => 'Ці вы ўпэўненыя, што жадаеце ігнараваць усе камэнтары ад удзельніка $1?',
	'comments-delete-warning' => 'Вы ўпэўненыя, што жадаеца выдаліць гэты камэнтар?',
	'comments-sort-by-date' => 'Сартаваць паводле даты',
	'comments-sort-by-score' => 'Сартаваць паводле адзнакі',
	'comments-show-comment-link' => 'Паказаць камэнтар',
	'comments-manage-blocklist-link' => 'Кіраваньне сьпісам ігнараваньня',
	'comments-ignore-message' => 'Вы ігнаруеце аўтара гэтага камэнтара',
	'comments-you' => 'Вы',
	'comments-reply' => 'Адказаць',
	'comments-login-required' => 'Вы мусіце ўвайсьці, каб дасылаць камэнтары',
	'comments-not-allowed' => 'Вам не дазволена дасылаць камэнтары.',
	'comments-post' => 'Даслаць камэнтар',
	'comments-submit' => 'Падзяліцеся камэнтарам',
	'comments-score-text' => 'Адзнака',
	'comments-permalink' => 'Сталая спасылка',
	'comments-delete-link' => 'Выдаліць камэнтар',
	'comments-anon-name' => 'Ананімны ўдзельнік',
	'comments-anon-message' => '{{SITENAME}} вітае <b>ўсіх камэнтатараў</b>. Калі вы не жадаеце хаваць сваю асобу, <a href="$1">зарэгіструйцеся</a> ці <a href="$2">ўвайдзіце</a>. Гэта бясплатна.',
	'comments-ignore-item' => '<a href="$1">$2</a>, $3 <a href="$4">(разблякаваць)</a>',
	'comments-ignore-no-users' => 'Цяпер ніводны ўдзельнік не заблякаваны.',
	'comments-ignore-remove-message' => 'Вы ўпэўненыя, што жадаеце зноў бачыць камэнтары <b>$1</b>?',
	'comments-ignore-unblock' => 'Разблякаваць',
	'comments-ignore-cancel' => 'Скасаваць',
	'comments-ignore-title' => 'Сьпіс ігнараваных камэнтатараў',
	'commentignorelist' => 'Сьпіс ігнараваных камэнтатараў',
	'comments-no-comments-of-day' => 'Сёньня лепшых камэнтараў дня няма.',
	'log-name-comments' => 'Журнал камэнтараў',
	'log-description-comments' => 'Гэта журнал камэнтараў.',
	'comments-time-ago' => '$1 таму',
	'comments-time-days' => '$1 {{PLURAL:$1|дзень|дні|дзён}}',
	'comments-time-hours' => '$1 {{PLURAL:$1|гадзіну|гадзіны|гадзінаў}}',
	'comments-time-minutes' => '$1 {{PLURAL:$1|хвіліну|хвіліны|хвілінаў}}',
	'comments-time-seconds' => '$1 {{PLURAL:$1|сэкунду|сэкунды|сэкундаў}}',
	'log-show-hide-comments' => '$1 журнал камэнтараў',
	'group-commentadmin' => 'Адміністратары камэнтараў',
	'group-commentadmin-member' => '{{GENDER:$1|адміністратар камэнтараў|адміністратарка камэнтараў}}',
	'grouppage-commentadmin' => '{{ns:project}}:Адміністратары камэнтараў',
	'right-comment' => 'дасылаць камэнтары',
	'right-commentadmin' => 'адміністраваць дасланыя камэнтары',
);

/** Bulgarian (български)
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'comments-comment' => 'Коментар',
	'comments-cancel-reply' => 'Отказване',
	'comments-you' => 'Вие',
	'comments-reply' => 'Отговор',
	'comments-score-text' => 'Точки',
	'comments-ignore-cancel' => 'Отказване',
);

/** Bengali (বাংলা)
 * @author Bellayet
 */
$messages['bn'] = array(
	'comments-comment' => 'মন্তব্য',
	'comments-loading' => 'লোডিং...',
	'comments-reply-to' => 'প্রাপক',
	'comments-cancel-reply' => 'বাতিল',
	'comments-show-comment-link' => 'মন্তব্য দেখাও',
	'comments-you' => 'আপনি',
	'comments-reply' => 'উত্তর',
	'comments-score-text' => 'স্কোর',
	'comments-ignore-cancel' => 'বাতিল',
	'comments-time-ago' => '$1 আগে',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 */
$messages['br'] = array(
	'comments-comment' => 'Evezhiadenn',
	'comments-voted-label' => 'Votet',
	'comments-loading' => 'O kargañ...',
	'comments-reply-to' => 'Respont da',
	'comments-cancel-reply' => 'Nullañ',
	'comments-delete-warning' => "Ha sur oc'h hoc'h e fell deoc'h dilemel an evezhiadenn-mañ ?",
	'comments-sort-by-date' => 'Urzhiañ dre zeiziad',
	'comments-show-comment-link' => 'diskouez an evezhiadenn',
	'comments-manage-blocklist-link' => 'Merañ ar roll dianavezout',
	'comments-you' => "C'hwi",
	'comments-reply' => 'Respont',
	'comments-login-required' => "Ret eo deoc'h bezañ kevreet evit ouzhpennañ evezhiadennoù",
	'comments-not-allowed' => "N'oc'h ket aotreet da embann evezhiadennoù.",
	'comments-post' => 'Lakaat un evezhiadenn',
	'comments-submit' => "Ouzhpennañ hoc'h evezhiadenn",
	'comments-score-text' => 'Poentoù',
	'comments-permalink' => 'Peurliamm',
	'comments-delete-link' => 'Diverkañ an evezhiadenn',
	'comments-anon-name' => 'Implijer dizanv',
	'comments-ignore-item' => '<a href="$1">$2</a> war $3 <a href="$4">(distankañ)</a>',
	'comments-ignore-no-users' => "N'eus implijer stanket ebet evit bremañ.",
	'comments-ignore-remove-message' => "Ha sur oc'h e fell deoc'h distankañ evezhiadennoù an implijer <b>$1</b> ?",
	'comments-ignore-unblock' => 'Distankañ',
	'comments-ignore-cancel' => 'Nullañ',
	'log-name-comments' => 'Marilh an evezhiadennoù',
	'log-description-comments' => 'Hemañ zo ur marilh evezhiadennoù.',
	'logentry-comments-add' => '$1 en deus embannet un evezhiadenn nevez war $3',
	'logentry-comments-delete' => '$1 en deus dilamet an evezhiadenn $4 war $3',
	'comments-time-ago' => '$1 zo',
	'comments-time-days' => '{{PLURAL:$1|un deiz|$1 deiz}}',
	'comments-time-hours' => '{{PLURAL:$1|un eur|$1 eur}}',
	'comments-time-minutes' => '{{PLURAL:$1|ur vunutenn|$1 munut}}',
	'comments-time-seconds' => '{{PLURAL:$1|un eiladenn|$1 eiladenn}}',
	'log-show-hide-comments' => 'Marilh evezhiadennoù $1',
	'right-comment' => 'Kas an evezhiadennoù',
	'right-commentadmin' => 'Merañ an evezhiadennoù kaset gant an implijerien',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'comments-delete-warning' => 'Da li ste sigurni da želite obrisati ovaj komentar?',
);

/** Catalan (català)
 * @author Arnaugir
 * @author Pitort
 */
$messages['ca'] = array(
	'comments-comment' => 'Comentari',
	'comments-voted-label' => 'Votat',
	'comments-loading' => 'Carregant...',
	'comments-reply-to' => 'Respon a',
	'comments-cancel-reply' => 'Cancel·la',
	'comments-delete-warning' => 'Esteu segurs de voler suprimir aquest comentari?',
	'comments-sort-by-date' => 'Ordena per data',
	'comments-sort-by-score' => 'Ordena per puntuació',
	'comments-show-comment-link' => 'Mostra el comentari',
	'comments-manage-blocklist-link' => "Gestiona la llista d'ignorats",
	'comments-ignore-message' => "Estàs ignorant l'autor d'aquest comentari",
	'comments-you' => 'Vostè',
	'comments-reply' => 'Resposta',
	'comments-login-required' => "Has d'estar identificat per afegir comentaris",
	'comments-not-allowed' => 'No teniu permís per enviar comentaris.',
	'comments-post' => 'Publica un comentari',
	'comments-submit' => 'Afegeix el teu comentari',
	'comments-score-text' => 'Puntuació',
	'comments-permalink' => 'enllaç permanent',
	'comments-delete-link' => 'Suprimeix el comentari',
	'comments-anon-name' => 'Usuari anònim',
	'comments-ignore-no-users' => 'No hi ha cap usuari blocat.',
	'comments-ignore-unblock' => 'Desbloqueja',
	'comments-ignore-cancel' => 'Cancel·la',
	'comments-ignore-title' => "Llista d'ignorats dels comentaris",
	'commentignorelist' => "Llista d'ignorats dels comentaris",
	'comments-no-comments-of-day' => 'No hi ha cap comentari del dia.',
	'log-name-comments' => 'Registre de comentaris',
	'log-description-comments' => 'Això és un registre de comentaris.',
	'comments-time-ago' => 'fa $1',
	'comments-time-days' => '{{PLURAL:$1|un dia|$1 dies}}',
	'comments-time-hours' => '{{PLURAL:$1|una hora|$1 hores}}',
	'comments-time-minutes' => '{{PLURAL:$1|un minut|$1 minuts}}',
	'comments-time-seconds' => '{{PLURAL:$1|un segon|$1 segons}}',
	'log-show-hide-comments' => 'Registre de comentaris de $1',
	'group-commentadmin' => 'Administradors de comentaris',
	'group-commentadmin-member' => '{{GENDER:$1|adminsitrador|administradora}} de comentaris',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'comments-loading' => 'Чуйолуш…',
	'comments-cancel-reply' => 'Цаоьшу',
	'comments-submit' => 'ТӀетоха хьай къамел',
	'comments-ignore-cancel' => 'Цаоьшу',
	'comments-time-ago' => '$1 юха',
	'comments-time-hours' => '{{PLURAL:$1|Сахьат|$1 сахьат|$1 сахьат}}', # Fuzzy
);

/** Czech (čeština)
 * @author Vks
 */
$messages['cs'] = array(
	'comments-cancel-reply' => 'Zrušit',
	'comments-ignore-unblock' => 'Odblokovat',
	'log-name-comments' => 'Protokol o komentářích',
	'comments-time-ago' => 'před $1',
	'right-comment' => 'Odeslat komentář',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'comments-comment' => 'Sylw',
	'comments-voted-label' => 'Wedi pleidleisio',
	'comments-loading' => "Wrthi'n llwytho...",
	'comments-reply-to' => 'Ateb',
	'comments-cancel-reply' => 'Diddymu',
	'comments-delete-warning' => "Ydych chi'n siwr eich bod am ddileu'r sylw hwn?",
	'comments-sort-by-date' => 'Trefnu yn ôl dyddiad',
	'comments-reply' => 'Ateb',
);

/** Danish (dansk)
 * @author Tjernobyl
 */
$messages['da'] = array(
	'comments-comment' => 'Kommentar',
	'comments-loading' => 'Indlæser...',
	'comments-cancel-reply' => 'Annuller',
	'comments-sort-by-date' => 'Sorter efter dato',
	'comments-you' => 'Dig',
	'comments-reply' => 'Svar',
	'comments-submit' => 'Tilføj din kommentar',
	'comments-score-text' => 'Point',
	'comments-permalink' => 'Permanent henvisning',
	'comments-delete-link' => 'Slet kommentar',
	'comments-anon-name' => 'Anonym bruger',
	'comments-ignore-cancel' => 'Annuller',
);

/** German (Deutsch)
 * @author Gerry
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'comments-comment' => 'Kommentar',
	'comments-desc' => 'Ergänzt die Parsererweiterung <code>&lt;comments&gt;</code> zum Kommentieren von Seiten',
	'comments-db-locked' => '<h3>Hinzufügen von Kommentaren</h3>Die Datenbank ist momentan aufgrund routinemäßiger Wartungsarbeiten für den Schreibzugriff gesperrt. Bitte probiere es später noch einmal.',
	'comments-voted-label' => 'Abgestimmt',
	'comments-loading' => 'Lade …',
	'comments-auto-refresher-enable' => 'Die automatische Aktualisierung der Kommentare aktivieren.',
	'comments-auto-refresher-pause' => 'Die automatische Aktualisierung der Kommentare pausieren.',
	'comments-reply-to' => 'Antworten',
	'comments-cancel-reply' => 'Abbrechen',
	'comments-block-warning-anon' => 'Bist du sicher, dass du alle Kommentare dieses anonymen Benutzers (über seine IP-Adresse) dauerhaft ignorieren möchtest?',
	'comments-block-warning-user' => 'Bist du sicher, dass du alle Kommentare des Benutzers $1 dauerhaft ignorieren möchtest?',
	'comments-delete-warning' => 'Bist du sicher, dass du diesen Kommentar löschen möchtest?',
	'comments-sort-by-date' => 'Nach Datum sortieren',
	'comments-sort-by-score' => 'Nach Punktzahl sortieren',
	'comments-show-comment-link' => 'Kommentar anzeigen',
	'comments-manage-blocklist-link' => 'Ignorierliste zu Kommentaren verwalten',
	'comments-ignore-message' => 'Du ignorierst den Verfasser dieses Kommentars',
	'comments-you' => ' Du',
	'comments-reply' => 'Anworten',
	'comments-login-required' => 'Du musst angemeldet sein, um Kommentare hinzufügen zu können.',
	'comments-not-allowed' => 'Du bist nicht berechtigt Kommentare hinzuzufügen.',
	'comments-post' => 'Kommentar speichern',
	'comments-submit' => 'Kommentar hinzufügen',
	'comments-score-text' => 'Punktzahl',
	'comments-permalink' => 'Permanentlink',
	'comments-delete-link' => 'Kommentar löschen',
	'comments-anon-name' => 'Anonymer Benutzer',
	'comments-anon-message' => '{{SITENAME}} freut sich über <b>alle Kommentare</b>. Sofern du nicht anonym bleiben möchtest, <a href="$1">registriere dich bitte</a> oder <a href="$2">melde dich an</a>.',
	'comments-links-are-forbidden' => 'Weblinks sind in Kommentaren verboten!',
	'comments-is-spam' => 'Der eingegebene Kommentartext wurde als Spam interpretiert.',
	'comments-ignore-item' => '<a href="$1">$2</a> am $3 <a href="$4">(freigeben)</a>',
	'comments-ignore-no-users' => 'Momentan gibt es keine gesperrten Benutzer.',
	'comments-ignore-remove-message' => 'Bist du sicher, dass du die Kommentare von Benutzer <b>$1</b> wieder freigeben möchtest?',
	'comments-ignore-unblock' => 'Freigeben',
	'comments-ignore-cancel' => 'Abbrechen',
	'comments-ignore-title' => 'Ignorierliste zu Kommentaren',
	'commentignorelist' => 'Ignorierliste zu Kommentaren',
	'comments-no-comments-of-day' => 'Es gibt keinen Kommentar des Tages.',
	'log-name-comments' => 'Kommentar-Logbuch',
	'log-description-comments' => 'Dies ist ein Logbuch von Kommentaren.',
	'logentry-comments-add' => '$1 hinterließ einen neuen Kommentar auf $3',
	'logentry-comments-delete' => '$1 löschte den Kommentar #$4 auf $3',
	'comments-time-ago' => 'vor $1',
	'comments-time-days' => '{{PLURAL:$1|einem Tag|$1 Tage}}',
	'comments-time-hours' => '{{PLURAL:$1|einer Stunde|$1 Stunden}}',
	'comments-time-minutes' => '{{PLURAL:$1|einer Minute|$1 Minuten}}',
	'comments-time-seconds' => '{{PLURAL:$1|einer Sekunde|$1 Sekunden}}',
	'log-show-hide-comments' => 'Kommentar-Logbuch $1',
	'group-commentadmin' => 'Kommentaradministrator',
	'group-commentadmin-member' => '{{GENDER:$1|Kommentaradministrator|Kommentaradministratorin}}',
	'grouppage-commentadmin' => '{{ns:project}}:Kommentaradministratoren',
	'right-comment' => 'Kommentar abgeben',
	'right-commentadmin' => 'Benutzerkommentare verwalten',
	'right-commentlinks' => 'Weblinks in Kommentaren verwenden',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'comments-db-locked' => '<h3>Hinzufügen von Kommentaren</h3>Die Datenbank ist momentan aufgrund routinemäßiger Wartungsarbeiten für den Schreibzugriff gesperrt. Bitte probieren Sie es später noch einmal.',
	'comments-block-warning-anon' => 'Sind Sie sicher, dass Sie alle Kommentare dieses anonymen Benutzers (über seine IP-Adresse) dauerhaft ignorieren möchten?',
	'comments-block-warning-user' => 'Sind Sie sicher, dass Sie alle Kommentare des Benutzers $1 dauerhaft ignorieren möchten?',
	'comments-delete-warning' => 'Sind Sie sicher, dass Sie diesen Kommentar löschen möchten?',
	'comments-ignore-message' => 'Sie ignorieren den Verfasser dieses Kommentars',
	'comments-you' => ' Sie',
	'comments-login-required' => 'Sie müssen angemeldet sein, um Kommentare hinzufügen zu können.',
	'comments-not-allowed' => 'Sie sind nicht berechtigt Kommentare hinzuzufügen.',
	'comments-anon-message' => '{{SITENAME}} freut sich über <b>alle Kommentare</b>. Sofern Sie nicht anonym bleiben möchten, <a href="$1">registrieren Sie sich bitte</a> oder <a href="$2">melden Sie sich an</a>.',
	'comments-ignore-remove-message' => 'Sind Sie sicher, dass Sie die Kommentare von Benutzer <b>$1</b> wieder freigeben möchten?',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Gorizon
 * @author Mirzali
 */
$messages['diq'] = array(
	'comments-comment' => 'Vacayış',
	'comments-voted-label' => 'Rey Bıdê',
	'comments-loading' => 'Bar beno...',
	'comments-reply-to' => 'Cewabê',
	'comments-cancel-reply' => 'Bıterkne',
	'comments-show-comment-link' => 'Vatışi bıvin',
	'comments-you' => 'Tı',
	'comments-reply' => 'Cewab',
	'comments-post' => 'Vatışe bırşe',
	'comments-submit' => 'Vatışa xo dekere de',
	'comments-score-text' => 'Skor',
	'comments-permalink' => 'Greyo Daimi',
	'comments-delete-link' => 'Vatışi bestern',
	'comments-anon-name' => 'Karbero bêname',
	'comments-ignore-unblock' => 'bloqi hewad',
	'comments-ignore-cancel' => 'Bıterkne',
	'log-name-comments' => 'Qeyda vatışan',
	'comments-time-ago' => 'Verdê $1',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'comments-time-ago' => 'pśed $1',
);

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author ZaDiak
 */
$messages['el'] = array(
	'comments-comment' => 'Σχόλιο',
	'comments-voted-label' => 'Έχετε ψηφίσει',
	'comments-loading' => 'Φόρτωση...',
	'comments-auto-refresher-enable' => 'Ενεργοποίηση αυτόματης ανανέωσης σχολίων',
	'comments-auto-refresher-pause' => 'Διακοπή αυτόματης ανανέωσης σχολίων',
	'comments-reply-to' => 'Απάντηση σε',
	'comments-cancel-reply' => 'Ακύρωση',
	'comments-sort-by-date' => 'Ταξινόμηση κατά ημερομηνία',
	'comments-sort-by-score' => 'Ταξινόμηση κατά βαθμολογία',
	'comments-show-comment-link' => 'Προβολή σχολίου',
	'comments-you' => 'Εσείς',
	'comments-reply' => 'Απάντηση',
	'comments-post' => 'Δημοσίευση σχολίου',
	'comments-submit' => 'Προσθήκη του σχολίου σας',
	'comments-score-text' => 'Βαθμολογία',
	'comments-permalink' => 'Μόνιμος σύνδεσμος',
	'comments-delete-link' => 'Διαγραφή σχολίου',
	'comments-anon-name' => 'Ανώνυμος χρήστης',
	'comments-ignore-unblock' => 'Άρση φραγής',
	'comments-ignore-cancel' => 'Ακύρωση',
	'comments-ignore-title' => 'Λίστα αγνόησης σχολίων',
	'commentignorelist' => 'Λίστα αγνόησης σχολίων',
	'log-name-comments' => 'Αρχείο καταγραφής σχολίων',
	'log-description-comments' => 'Αυτό είναι ένα αρχείο καταγραφής σχολίων.',
	'comments-time-ago' => 'πριν $1',
	'comments-time-days' => '{{PLURAL:$1|μια μέρα|$1 μέρες}}',
	'comments-time-hours' => '{{PLURAL:$1|μια ώρα|$1 ώρες}}',
	'comments-time-minutes' => '{{PLURAL:$1|ένα λεπτό|$1 λεπτά}}',
	'comments-time-seconds' => '{{PLURAL:$1|ένα δευτερόλεπτο|$1 δευτερόλεπτα}}',
	'log-show-hide-comments' => '$1 αρχείο καταγραφής σχολίων',
	'group-commentadmin' => 'Διαχειριστές σχολίων',
	'group-commentadmin-member' => '{{GENDER:$1|διαχειριστής σχολίων}}',
	'grouppage-commentadmin' => '{{ns:project}}:Διαχειριστές σχολίων',
	'right-comment' => 'Καταχώρηση σχολίων',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'comments-comment' => 'Komento',
	'comments-voted-label' => 'Voĉdonita',
	'comments-loading' => 'Ŝargante...',
	'comments-reply-to' => 'Respondo al',
	'comments-cancel-reply' => 'Nuligi',
	'comments-sort-by-date' => 'Ordigi laŭ datoj',
	'comments-sort-by-score' => 'Ordigi laŭ poentaro',
	'comments-show-comment-link' => 'Montri komenton',
	'comments-you' => 'Vi',
	'comments-reply' => 'Respondi',
	'comments-login-required' => 'Vi devas ensaluti por aldoni komentojn',
	'comments-not-allowed' => 'Vi ne estas permesata por afiŝi komentojn.',
	'comments-post' => 'Afiŝi komenton',
	'comments-submit' => 'Aldoni vian komenton',
	'comments-score-text' => 'Poentaro',
	'comments-permalink' => 'Konstanta ligilo',
	'comments-delete-link' => 'Forigi komenton',
	'comments-anon-name' => 'Anonimulo',
	'comments-anon-message' => '{{SITENAME}} bonvenas <b>ĉiujn komentojn</b>. Se vi ne volas esti anonima, <a href="$1">registri</a> aŭ <a href="$2">ensaluti</a>. Estas senpage.',
	'comments-ignore-no-users' => 'Estas neniuj uzantoj nune forbaritaj.',
	'comments-ignore-remove-message' => 'Ĉu vi certas ke vi volas malforbari komentojn de uzanto <b>$1</b>?',
	'comments-ignore-unblock' => 'Malforbari',
	'comments-ignore-cancel' => 'Nenio',
	'comments-ignore-title' => 'Ignor-listo de komentoj',
	'commentignorelist' => 'Ignor-listo de komentoj',
	'comments-no-comments-of-day' => 'Estas neniuj komentoj de la tago.',
	'log-name-comments' => 'Protokolo pri komentoj',
	'log-description-comments' => 'Jen protokolo de komentoj.',
	'comments-time-ago' => 'antaŭ $1',
	'comments-time-days' => '{{PLURAL:$1|$1 tago|$1 tagoj}}',
	'comments-time-hours' => '{{PLURAL:$1|$1 horo|$1 horoj}}',
	'comments-time-minutes' => '{{PLURAL:$1|$1 minuto|$1 minutoj}}',
	'comments-time-seconds' => '{{PLURAL:$1|$1 sekundo|$1 sekundoj}}',
	'log-show-hide-comments' => 'protokolo de komentoj $1',
	'group-commentadmin' => 'Administrantoj de komentoj',
	'group-commentadmin-member' => '{{GENDER:$1|administranto de komentoj|administrantino de komentoj}}',
	'grouppage-commentadmin' => '{{ns:project}}:Administrantoj de komentoj',
	'right-comment' => 'Publikigi komentojn',
	'right-commentadmin' => 'Administri komentaron senditan de komentoj',
);

/** Spanish (español)
 * @author AndreyWiki
 * @author Armando-Martin
 * @author Bernardom
 * @author Fitoschido
 * @author Ihojose
 */
$messages['es'] = array(
	'comments-comment' => 'Comentario',
	'comments-desc' => 'Añade el asociador analítico <code>&lt;comments&gt;</code> que permite hacer comentarios en las páginas',
	'comments-db-locked' => '<h3>Agregar comentarios</h3>La base de datos se ha bloqueado para realizar tareas de mantenimiento de rutina. Cuando estos trabajos concluyan, la base de datos volverá a la normalidad. Por favor, regresa más tarde.',
	'comments-voted-label' => 'Valorado',
	'comments-loading' => 'Cargando...',
	'comments-auto-refresher-enable' => 'Habilitar actualización automática de comentarios',
	'comments-auto-refresher-pause' => 'Pausar actualización automática de comentarios',
	'comments-reply-to' => 'Responder a',
	'comments-cancel-reply' => 'Cancelar',
	'comments-block-warning-anon' => '¿Estás seguro que deseas ignorar permanentemente todos los comentarios de este usuario anónimo (a través de su dirección IP)?',
	'comments-block-warning-user' => '¿Estás seguro de que deseas ignorar permanentemente todos los comentarios del usuario $1?',
	'comments-delete-warning' => '¿Está seguro que desea eliminar este comentario?',
	'comments-sort-by-date' => 'Ordenar por fecha',
	'comments-sort-by-score' => 'Ordenar por valoración',
	'comments-show-comment-link' => 'Mostrar comentario',
	'comments-manage-blocklist-link' => 'Administrar lista de comentarios ignorados',
	'comments-ignore-message' => 'Estás ignorando al autor de este comentario',
	'comments-you' => ' Tú',
	'comments-reply' => 'Responder',
	'comments-login-required' => 'Debes iniciar sesión para agregar comentarios',
	'comments-not-allowed' => 'No puedes publicar comentarios.',
	'comments-post' => 'Publicar comentario',
	'comments-submit' => 'Agrega tu comentario',
	'comments-score-text' => 'Valoración',
	'comments-permalink' => 'Enlace permanente',
	'comments-delete-link' => 'Borrar comentario',
	'comments-anon-name' => 'Usuario anónimo',
	'comments-anon-message' => '{{SITENAME}} valora <b>todos los comentarios</b>. Si no quieres ser un usuario anónimo, <a href="$1">regístrate</a> o <a href="$2">inicia sesión</a>. Es gratis.',
	'comments-ignore-item' => '<a href="$1">$2</a> el $3 <a href="$4">(desbloquear)</a>',
	'comments-ignore-no-users' => 'No hay ningún usuario bloqueado.',
	'comments-ignore-remove-message' => '¿Estás seguro de que deseas desbloquear los comentarios de <b>$1</b>?',
	'comments-ignore-unblock' => 'Desbloquear',
	'comments-ignore-cancel' => 'Cancelar',
	'comments-ignore-title' => 'Lista de comentarios ignorados',
	'commentignorelist' => 'Lista de comentarios ignorados',
	'comments-no-comments-of-day' => 'No hay ningún comentario del día.',
	'log-name-comments' => 'Registro de comentarios',
	'log-description-comments' => 'Este es un registro de los comentarios.',
	'logentry-comments-add' => '$1 publicó un comentario nuevo en $3',
	'logentry-comments-delete' => '$1 eliminó el comentario n.º $4 en $3',
	'comments-time-ago' => 'Hace $1',
	'comments-time-days' => '{{PLURAL:$1|un día|$1 días}}',
	'comments-time-hours' => '{{PLURAL:$1|una hora|$1 horas}}',
	'comments-time-minutes' => '{{PLURAL:$1|un minuto|$1 minutos}}',
	'comments-time-seconds' => '{{PLURAL:$1|un segundo|$1 segundos}}',
	'log-show-hide-comments' => '$1 registro de comentarios',
	'group-commentadmin' => 'Administradores de comentarios',
	'group-commentadmin-member' => '{{GENDER:$1|administrador de comentarios|administradora de comentarios|administrador de comentarios}}',
	'grouppage-commentadmin' => '{{ns:project}}:Administradores de comentarios',
	'right-comment' => 'Enviar comentarios',
	'right-commentadmin' => 'Administrar los comentarios enviados por los usuarios',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'comments-comment' => 'Kommenteeri',
	'comments-loading' => 'Laadimine...',
	'comments-reply-to' => 'Vasta kasutajale',
	'comments-cancel-reply' => 'Loobu',
	'comments-block-warning-anon' => 'Kas oled kindel, et soovid kõiki selle anonüümse kasutaja kommentaare jäädavalt eirata (IP-aadressi põhjal)?',
	'comments-block-warning-user' => 'Kas oled kindel, et soovid kõiki kasutaja $1 kommentaare jäädavalt eirata?',
	'comments-delete-warning' => 'Kas oled kindel, et tahad selle kommentaari kustutada?',
	'comments-sort-by-date' => 'Järjesta kuupäeva järgi',
	'comments-show-comment-link' => 'Näita kommentaari',
	'comments-manage-blocklist-link' => 'Halda eiramisloendit',
	'comments-ignore-message' => 'Sa eirad selle kommentaari autorit',
	'comments-you' => 'Sina',
	'comments-reply' => 'Vasta',
	'comments-login-required' => 'Sa pead olema sisselogitud, et lisada kommentaare',
	'comments-not-allowed' => 'Sul pole lubatud kommentaare postitada.',
	'comments-post' => 'Saada kommentaar',
	'comments-submit' => 'Lisa oma kommentaar',
	'comments-permalink' => 'Püsilink',
	'comments-delete-link' => 'Kustuta kommentaar',
	'comments-anon-name' => 'Anonüümne kasutaja',
	'comments-ignore-no-users' => 'Blokeeritud kasutajaid pole praegu.',
	'comments-ignore-remove-message' => 'Kas oled kindel, et soovid kasutaja <b>$1</b> kommentaaride blokeerimise tühistada?',
	'comments-ignore-unblock' => 'Lõpeta blokeerimine',
	'comments-ignore-cancel' => 'Loobu',
	'comments-ignore-title' => 'Kommentaaride eiramisloend',
	'commentignorelist' => 'Kommentaaride eiramisloend',
	'comments-no-comments-of-day' => 'Päevakommentaarid puuduvad.',
	'log-name-comments' => 'Kommentaarilogi',
	'log-description-comments' => 'See on kommentaaride logi.',
	'comments-time-ago' => '$1 tagasi',
	'comments-time-days' => '{{PLURAL:$1|üks päev|$1 päeva}}',
	'comments-time-hours' => '{{PLURAL:$1|üks tund|$1 tundi}}',
	'comments-time-minutes' => '{{PLURAL:$1|üks minut|$1 minutit}}',
	'comments-time-seconds' => '{{PLURAL:$1|üks sekund|$1 sekundit}}',
	'log-show-hide-comments' => '$1 kommentaarilogi',
	'group-commentadmin' => 'Kommentaariadministraatorid',
	'group-commentadmin-member' => '{{GENDER:$1|kommentaariadministraator}}',
	'grouppage-commentadmin' => '{{ns:project}}:Kommentaariadministraatorid',
	'right-comment' => 'Saata kommentaare',
	'right-commentadmin' => 'Hallata kasutajate saadetud kommentaare',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Ebraminio
 * @author Mahdiz
 * @author Omidh
 * @author Reza1615
 * @author Taha
 * @author پاناروما
 */
$messages['fa'] = array(
	'comments-comment' => 'نظر',
	'comments-voted-label' => 'رای',
	'comments-loading' => 'در حال بارگذاری...',
	'comments-auto-refresher-enable' => 'فعال‌کردن تازه‌کنندهٔ خودکار نظر',
	'comments-auto-refresher-pause' => 'متوقف‌کردن تازه‌کنندهٔ خودکار نظر',
	'comments-reply-to' => 'پاسخ به',
	'comments-cancel-reply' => 'لغو',
	'comments-delete-warning' => 'آیا مطمئن هستید که می‌خواهید این نظر را حذف کنید؟',
	'comments-sort-by-date' => 'مرتب سازی بر اساس تاریخ',
	'comments-sort-by-score' => 'مرتب کردن بر اساس امتیاز',
	'comments-show-comment-link' => 'نمایش نظرها',
	'comments-manage-blocklist-link' => 'مدیریت فهرست چشم‌پوشی',
	'comments-ignore-message' => 'شما از نویسندهٔ این نظر چشم‌پوشی می‌کنید',
	'comments-you' => 'شما',
	'comments-reply' => 'پاسخ دادن',
	'comments-login-required' => 'برای نظردهی لازم است ابتدا وارد سامانه شوید',
	'comments-not-allowed' => 'شما مجاز به ارسال نظر نیستید.',
	'comments-post' => 'ارسال نظر',
	'comments-submit' => 'اضافه کردن نظر شما',
	'comments-score-text' => 'امتیاز',
	'comments-permalink' => 'پیوند پایدار',
	'comments-delete-link' => 'حذف نظر',
	'comments-anon-name' => 'کاربر ناشناس',
	'comments-anon-message' => '{{SITENAME}} <b>از همه نظرات</b> استقبال می‌کند. اگر شما نمی‌خواهید به صورت ناشناس باشید، <a href="<span class=" notranslate"="" translate="no">$1 "> ثبت نام کنید</a> یا <a href="<span class=" notranslate"="" translate="no">$2" > وارد سامانه شوید.</a>. این عمل رایگان است.',
	'comments-ignore-no-users' => 'هیچ کاربری در حال حاضر بسته نشده است.',
	'comments-ignore-unblock' => 'باز شود',
	'comments-ignore-cancel' => 'لغو',
	'logentry-comments-add' => '$1 نظری جدید در صفحهٔ $3 ارسال کرد',
	'logentry-comments-delete' => '$1 نظر #$4 را از صفحهٔ $3 حذف کرد',
	'comments-time-ago' => '$1 پیش',
	'comments-time-days' => '{{PLURAL:$1|یک روز|$1 روز}}',
	'comments-time-hours' => '{{PLURAL:$1|یک ساعت|$1 ساعت}}',
	'comments-time-minutes' => '{{PLURAL:$1|یک دقیقه|$1 دقیقه}}',
	'comments-time-seconds' => '{{PLURAL:$1|یک ثانیه|$1 ثانیه}}',
	'log-show-hide-comments' => 'سیاههٔ نظرات $1',
	'group-commentadmin' => 'مدیران نظرات',
	'right-comment' => 'ارسال نظرات',
);

/** Finnish (suomi)
 * @author Crt
 * @author Jack Phoenix <jack@countervandalism.net>
 * @author Nedergard
 * @author Nike
 */
$messages['fi'] = array(
	'comments-comment' => 'Kommentoi',
	'comments-db-locked' => '<h3>Kommenttien lisääminen</h3>Tietokanta on tällä hetkellä lukittu rutiinihuoltoa varten, jonka jälkeen se palautuu takaisin normaaliksi. Tule myöhemmin uudestaan!',
	'comments-voted-label' => 'Äänestetty',
	'comments-loading' => 'Ladataan...',
	'comments-auto-refresher-enable' => 'Ota käyttöön kommenttien automaattinen päivitys',
	'comments-auto-refresher-pause' => 'Pysäytä kommenttien automaattinen päivitys',
	'comments-reply-to' => 'Vastaa käyttäjälle',
	'comments-cancel-reply' => 'Peru',
	'comments-block-warning-anon' => 'Oletko varma, että haluat lopullisesti jättää kaikki kommentit huomiotta tältä anonyymiltä käyttäjältä (IP-osoitteensa perusteella)?',
	'comments-block-warning-user' => 'Oletko varma, että haluat lopullisesti jättää kaikki kommentit huomiotta käyttäjältä $1?',
	'comments-delete-warning' => 'Oletko varma, että haluat poistaa tämän kommentin?',
	'comments-sort-by-date' => 'Järjestä päivämäärän mukaan',
	'comments-sort-by-score' => 'Järjestä pisteiden mukaan',
	'comments-show-comment-link' => 'Näytä kommentti',
	'comments-manage-blocklist-link' => 'Hallinnoi huomioimattomuuslistaa',
	'comments-ignore-message' => 'Et huomioi tämän kommentin kirjoittajaa',
	'comments-you' => 'Sinä',
	'comments-reply' => 'Vastaa',
	'comments-login-required' => 'Sinun tulee olla kirjautunut sisään voidaksesi lisätä kommentteja',
	'comments-not-allowed' => 'Et voi lisätä kommentteja.',
	'comments-post' => 'Lähetä kommentti',
	'comments-submit' => 'Kommenttisi',
	'comments-score-text' => 'Pistemäärä',
	'comments-permalink' => 'Ikilinkki',
	'comments-delete-link' => 'Poista kommentti',
	'comments-anon-name' => 'Anonyymi käyttäjä',
	'comments-anon-message' => '{{SITENAME}} toivottaa tervetulleeksi <b>kaikki kommentit</b>.  Jos et halua olla anonyymi, <a href="$1">rekisteröidy</a> tai <a href="$2">kirjaudu sisään</a>.  Se on ilmaista.',
	'comments-ignore-item' => '<a href="$1">$2</a>; $3 <a href="$4">(poista huomioimattomuuslistalta)</a>',
	'comments-ignore-no-users' => 'Sinulla ei ole yhtään käyttäjää huomioimattomuuslistallasi.',
	'comments-ignore-remove-message' => 'Oletko varma, että haluat huomioida kommentit käyttäjältä <b>$1</b>?',
	'comments-ignore-unblock' => 'Poista esto',
	'comments-ignore-cancel' => 'Peru',
	'comments-ignore-title' => 'Kommenttien huomioimattomuuslista',
	'commentignorelist' => 'Kommenttien huomioimattomuuslista',
	'comments-no-comments-of-day' => 'Ei päivän kommentteja.',
	'log-name-comments' => 'Kommenttiloki',
	'log-description-comments' => 'Tämä on loki kommenteista.',
	'comments-time-ago' => '$1 sitten',
	'comments-time-days' => '{{PLURAL:$1|päivä|$1 päivää}}',
	'comments-time-hours' => '{{PLURAL:$1|tunti|$1 tuntia}}',
	'comments-time-minutes' => '{{PLURAL:$1|minuutti|$1 minuuttia}}',
	'comments-time-seconds' => '{{PLURAL:$1|sekunti|$1 sekuntia}}',
	'log-show-hide-comments' => '$1 kommenttiloki',
	'group-commentadmin' => 'kommenttien ylläpitäjät',
	'group-commentadmin-member' => '{{GENDER:$1|kommenttien ylläpitäjä}}',
	'grouppage-commentadmin' => '{{ns:project}}:kommenttien ylläpitäjät',
	'right-comment' => 'Lähettää kommentteja',
	'right-commentadmin' => 'Hallinnoida käyttäjien lähettämiä kommentteja',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'comments-comment' => 'Viðmerk',
	'comments-desc' => 'Leggur afturat <code>&lt;comments&gt;</code> parser-húk ið loyvir viðmerkingum á síðum',
	'comments-voted-label' => 'Atkvøtt',
	'comments-loading' => 'Innlesur...',
	'comments-reply-to' => 'Svara',
	'comments-cancel-reply' => 'Angra',
	'comments-show-comment-link' => 'Vís viðmerking',
	'comments-you' => 'Tú',
	'comments-reply' => 'Svara',
	'comments-anon-name' => 'Dulnevndur brúkari',
	'comments-anon-message' => '{{SITENAME}} vil gjarna hava <b>viðmerkingar</b>. Um tú ikki vilt vera dulnevnd/ur, so kanst tú <a href="$1">skráseta teg</a> ella <a href="$2">rita inn</a>. Tað er ókeypis.',
	'comments-ignore-item' => '<a href="$1">$2</a> hin $3 <a href="$4">(tak sperring burtur)</a>',
	'comments-time-ago' => '$1 síðan',
	'comments-time-days' => '{{PLURAL:$1|ein dagur|$1 dagar}}',
	'comments-time-hours' => '{{PLURAL:$1|ein tími|$1 tímar}}',
	'comments-time-minutes' => '{{PLURAL:$1|ein minuttur|$1 minuttir}}',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 * @author Linedwell
 */
$messages['fr'] = array(
	'comments-comment' => 'Commenter',
	'comments-desc' => 'Ajoute une amorce d’analyse <code>&lt;comments&gt;</code> qui permet de commenter les pages',
	'comments-db-locked' => '<h3>Ajouter des commentaires</h3>La base de données est actuellement bloquée pour la maintenance de routine, après quoi elle sera de retour à la normale. S’il vous plaît revenez plus tard !',
	'comments-voted-label' => 'Voté',
	'comments-loading' => 'Chargement...',
	'comments-auto-refresher-enable' => 'Activer commentaire auto-actualiser',
	'comments-auto-refresher-pause' => 'Arrêter commentaire auto-actualiser',
	'comments-reply-to' => 'Répondre à',
	'comments-cancel-reply' => 'Annuler',
	'comments-block-warning-anon' => 'Êtes-vous sûr de vouloir ignorer de façon permanente tous les commentaires de cet utilisateur anonyme (via son adresse IP)?',
	'comments-block-warning-user' => 'Êtes-vous sûr de vouloir ignorer de façon permanente tous les commentaires de l’utilisateur $1?',
	'comments-delete-warning' => 'Êtes-vous sûr de vouloir supprimer ce commentaire?',
	'comments-sort-by-date' => 'Trier par date',
	'comments-sort-by-score' => 'Trier par score',
	'comments-show-comment-link' => 'Voir commentaire',
	'comments-manage-blocklist-link' => 'Gérer la liste ignorer',
	'comments-ignore-message' => 'Vous ignorez l’auteur de ce commentaire',
	'comments-you' => ' Vous',
	'comments-reply' => 'Répondre',
	'comments-login-required' => 'Vous devez être connecté afin de pouvoir ajouter des commentaires',
	'comments-not-allowed' => "Vous n'êtes pas autorisé à publier de commentaire.",
	'comments-post' => 'Publier le commentaire',
	'comments-submit' => 'Ajouter votre commentaire',
	'comments-score-text' => 'Score',
	'comments-permalink' => 'Lien permanent',
	'comments-delete-link' => 'Supprimer le commentaire',
	'comments-anon-name' => 'Utilisateur anonyme',
	'comments-anon-message' => '{{SITENAME}} se félicite de <b>tous les commentaires</b>.  Si vous ne voulez pas être anonyme, <a href="$1">enregistre</a> ou <a href="$2">se connecter</a>.  C’est gratuit.',
	'comments-links-are-forbidden' => 'Les liens externes dans les commentaires sont interdits !',
	'comments-is-spam' => 'Le texte du commentaire soumis a été interprété comme pourriel.',
	'comments-ignore-item' => '<a href="$1">$2</a> sur $3 <a href="$4">(débloquer)</a>',
	'comments-ignore-no-users' => 'Il n’y a pas d’utilisateurs actuellement bloquée.',
	'comments-ignore-remove-message' => 'Voulez-vous vraiment de débloquer les commentaires de l’utilisateur <b>$1</b> ?',
	'comments-ignore-unblock' => 'Débloquer',
	'comments-ignore-cancel' => 'Annuler',
	'comments-ignore-title' => 'Commentaire liste des ignorés',
	'commentignorelist' => 'Commentaire liste des ignorés',
	'comments-no-comments-of-day' => 'Il n’y a aucun commentaire sur la journée.',
	'log-name-comments' => 'Historique des commentaires',
	'log-description-comments' => 'Ceci est un journal de commentaires.',
	'logentry-comments-add' => '$1 a publié un nouveau commentaire sur $3',
	'logentry-comments-delete' => '$1 a supprimé le commentaire #$4 sur $3',
	'comments-time-ago' => 'Il y’a $1',
	'comments-time-days' => '{{PLURAL:$1|un jour|$1 jours}}',
	'comments-time-hours' => '{{PLURAL:$1|une heure|$1 heures}}',
	'comments-time-minutes' => '{{PLURAL:$1|une minute|$1 minutes}}',
	'comments-time-seconds' => '{{PLURAL:$1|une seconde|$1 seconds}}',
	'log-show-hide-comments' => 'journal de commentaires $1',
	'group-commentadmin' => 'Administrateurs de commentaires',
	'group-commentadmin-member' => '{{GENDER:$1|administrateur de commentaires|administratrice de commentaires}}',
	'grouppage-commentadmin' => '{{ns:project}}:Administrateurs de commentaires',
	'right-comment' => 'Publier les commentaires',
	'right-commentadmin' => 'Administrer les commentaires soumis par les utilisateurs',
	'right-commentlinks' => 'Utiliser les liens externes dans les commentaires',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'comments-comment' => 'Comentèro',
	'comments-voted-label' => 'Votâ',
	'comments-loading' => 'Chargement...',
	'comments-reply-to' => 'Rèpondre a',
	'comments-cancel-reply' => 'Anular',
	'comments-sort-by-date' => 'Betar per dâta',
	'comments-sort-by-score' => 'Betar per mârca',
	'comments-show-comment-link' => 'Montrar lo comentèro',
	'comments-you' => 'Vos',
	'comments-reply' => 'Rèpondre',
	'comments-post' => 'Mandar lo mèssâjo',
	'comments-submit' => 'Apondre voutron comentèro',
	'comments-score-text' => 'Mârca',
	'comments-permalink' => 'Lim fixo',
	'comments-delete-link' => 'Ôtar lo comentèro',
	'comments-anon-name' => 'Utilisator anonimo',
	'comments-ignore-item' => '<a href="$1">$2</a> sur $3 <a href="$4">(dèblocar)</a>',
	'comments-ignore-no-users' => 'Ora y at gins d’utilisator blocâ.',
	'comments-ignore-remove-message' => 'Voléd-vos franc dèblocar los comentèros de l’utilisator <b>$1</b> ?',
	'comments-ignore-unblock' => 'Dèblocar',
	'comments-ignore-cancel' => 'Anular',
	'comments-no-comments-of-day' => 'Y at gins de comentèro du jorn.',
	'log-name-comments' => 'Jornal des comentèros',
	'log-description-comments' => 'O est un jornal de comentèros.',
	'comments-time-ago' => 'cen fât $1',
	'comments-time-days' => '{{PLURAL:$1|yon jorn|$1 jorns}}',
	'comments-time-hours' => '{{PLURAL:$1|yona hora|$1 hores}}',
	'comments-time-minutes' => '{{PLURAL:$1|yona menuta|$1 menutes}}',
	'comments-time-seconds' => '{{PLURAL:$1|yona seconda|$1 secondes}}',
	'log-show-hide-comments' => '$1 lo jornal des comentèros',
	'group-commentadmin' => 'Administrators de comentèros',
	'group-commentadmin-member' => 'administrat{{GENDER:$1|or|rice}} de comentèros',
	'grouppage-commentadmin' => '{{ns:project}}:Administrators de comentèros',
	'right-comment' => 'Sometre des comentèros',
	'right-commentadmin' => 'Administrar los comentèros somês per los utilisators',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'comments-comment' => 'Comentar',
	'comments-desc' => 'Engade o asociador analítico <code>&lt;comments&gt;</code> que permite comentar nas páxinas',
	'comments-db-locked' => '<h3>Engadir comentarios</h3>A base de datos está pechada por razóns de mantemento, despois dos cales volverá á normalidade. Volva despois!',
	'comments-voted-label' => 'Votado',
	'comments-loading' => 'Cargando...',
	'comments-auto-refresher-enable' => 'Activar a actualización automática dos comentarios',
	'comments-auto-refresher-pause' => 'Deter a actualización automática dos comentarios',
	'comments-reply-to' => 'Responder a',
	'comments-cancel-reply' => 'Cancelar',
	'comments-block-warning-anon' => 'Está seguro de querer ignorar permanentemente todos os comentarios deste usuario anónimo (mediante o seu enderezo IP)?',
	'comments-block-warning-user' => 'Está seguro de querer ignorar permanentemente todos os comentarios do usuario $1?',
	'comments-delete-warning' => 'Estás seguro de querer borrar este comentario?',
	'comments-sort-by-date' => 'Ordenar por data',
	'comments-sort-by-score' => 'Ordenar por puntuación',
	'comments-show-comment-link' => 'Mostrar o comentario',
	'comments-manage-blocklist-link' => 'Administrar a lista de ignorados',
	'comments-ignore-message' => 'Está ignorando o autor deste comentario',
	'comments-you' => ' Vostede',
	'comments-reply' => 'Responder',
	'comments-login-required' => 'Cómpre acceder ao sistema para engadir comentarios',
	'comments-not-allowed' => 'Non ten os permisos necesarios para publicar comentarios.',
	'comments-post' => 'Publicar o comentario',
	'comments-submit' => 'Engada o seu comentario',
	'comments-score-text' => 'Puntuación',
	'comments-permalink' => 'Ligazón permanente',
	'comments-delete-link' => 'Borrar o comentario',
	'comments-anon-name' => 'Usuario anónimo',
	'comments-anon-message' => '{{SITENAME}} agradece <b>todos os comentarios</b>. Se non quere ser anónimo, <a href="$1">rexístrese</a> ou <a href="$2">acceda ao sistema</a>. É gratuíto.',
	'comments-ignore-item' => '<a href="$1">$2</a> o $3 <a href="$4">(desbloquear)</a>',
	'comments-ignore-no-users' => 'Actualmente non hai ningún usuario bloqueado.',
	'comments-ignore-remove-message' => 'Está seguro de querer desbloquear os comentarios do usuario <b>$1</b>?',
	'comments-ignore-unblock' => 'Desbloquear',
	'comments-ignore-cancel' => 'Cancelar',
	'comments-ignore-title' => 'Lista de comentarios ignorados',
	'commentignorelist' => 'Lista de comentarios ignorados',
	'comments-no-comments-of-day' => 'Non hai ningún comentario do día.',
	'log-name-comments' => 'Rexistro de comentarios',
	'log-description-comments' => 'Este é un rexistro de comentarios.',
	'logentry-comments-add' => '$1 deixou un novo comentario en "$3"',
	'logentry-comments-delete' => '$1 borrou o comentario nº$4 en "$3"',
	'comments-time-ago' => 'hai $1',
	'comments-time-days' => '{{PLURAL:$1|un día|$1 días}}',
	'comments-time-hours' => '{{PLURAL:$1|unha hora|$1 horas}}',
	'comments-time-minutes' => '{{PLURAL:$1|un minuto|$1 minutos}}',
	'comments-time-seconds' => '{{PLURAL:$1|un segundo|$1 segundos}}',
	'log-show-hide-comments' => '$1 o rexistro de comentarios',
	'group-commentadmin' => 'Administradores de comentarios',
	'group-commentadmin-member' => '{{GENDER:$1|administrador|administradora}} de comentarios',
	'grouppage-commentadmin' => '{{ns:project}}:Administradores de comentarios',
	'right-comment' => 'Enviar comentarios',
	'right-commentadmin' => 'Administrar os comentarios enviados polos usuarios',
);

/** Hebrew (עברית)
 * @author Ofrahod
 * @author חיים
 */
$messages['he'] = array(
	'comments-comment' => 'תגובה',
	'comments-db-locked' => '<h3>הוספת הערות</h3>מסד הנתונים נעול כעת עקב תחזוקה שגרתית במסד הנתונים, לאחר מכן האתר ישוב לקדמותו. אנא בדוק שנית במועד מאוחר יותר!',
	'comments-voted-label' => 'הצבעה',
	'comments-loading' => 'טוען...',
	'comments-auto-refresher-enable' => 'אפשר רענון אוטומטי של תגובה',
	'comments-auto-refresher-pause' => 'מנע רענון אוטומטי של תגובה',
	'comments-reply-to' => 'השב אל',
	'comments-cancel-reply' => 'ביטול',
	'comments-sort-by-date' => 'מיין לפי שם',
	'comments-sort-by-score' => 'מיין לפי ציון',
	'comments-show-comment-link' => 'הצג הערה',
	'comments-manage-blocklist-link' => 'ניהול רשימת התעלמות',
	'comments-you' => 'אתה',
	'comments-reply' => 'השב',
	'comments-post' => 'פרסם תגובה',
	'comments-submit' => 'הוסף את ההערה שלך',
	'comments-score-text' => 'תוצאה',
	'comments-permalink' => 'קישור קבוע',
	'comments-delete-link' => 'מחק תגובה',
	'comments-anon-name' => 'משתמש אנונימי',
	'comments-ignore-unblock' => 'ביטול חסימה',
	'comments-ignore-cancel' => 'ביטול',
	'log-name-comments' => 'יומן ההערות',
	'comments-time-ago' => 'לפני $1',
	'comments-time-days' => '{{PLURAL:$1|יום אחד|יומיים|$1 ימים}}',
	'comments-time-hours' => '{{PLURAL:$1|שעה אחת|שעתיים|$1 שעות}}',
	'comments-time-minutes' => '{{PLURAL:$1|דקה אחת|$1 דקות}}',
	'comments-time-seconds' => '{{PLURAL:$1|שנייה אחת|$1 שניות}}',
	'log-show-hide-comments' => '$1 יומן ההערות',
	'group-commentadmin' => 'הערה מנהלית',
	'right-comment' => 'שלח הערות',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'comments-comment' => 'टिप्पणी',
	'comments-loading' => 'लोड हो रहा है...',
	'comments-reply-to' => 'उत्तर दें',
	'comments-cancel-reply' => 'रद्द करें',
	'comments-show-comment-link' => 'टीप्पणी दिखाएँ',
	'comments-you' => 'आप',
	'comments-reply' => 'उत्तर दें',
	'comments-post' => 'टिप्पणी पोस्ट करें',
	'comments-submit' => 'अपनी टिप्पणी जोड़ें',
	'comments-score-text' => 'अंक',
	'comments-ignore-cancel' => 'रद्द करें',
	'log-name-comments' => 'टिप्पणी लॉग',
	'comments-time-ago' => '$1 पहले',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'comments-comment' => 'Komentar',
	'comments-desc' => 'Přidawa parserowu hoku <code>&lt;comments&gt;</code>, kotraž komentowanje stronow zmóžnja.',
	'comments-db-locked' => '<h3>Přidawanje komentarow</h3>Datowa banka je tuchwilu rutinoweho wothladowanja datoweje banki dla zawrjena, po kotrymž budźe zaso wšitko normalne. Prošu spytaj pozdźišo hišće raz!',
	'comments-voted-label' => 'Wothłosowany',
	'comments-loading' => 'Začituje so...',
	'comments-auto-refresher-enable' => 'Awtomatiske aktualizowanje komentarow zmóžnić',
	'comments-auto-refresher-pause' => 'Awtomatiske aktualizowanje komentarow zastajić',
	'comments-reply-to' => 'Wotmołwić',
	'comments-cancel-reply' => 'Přetorhnyć',
	'comments-block-warning-anon' => 'Chceš woprawdźe wšě komentary tutoho anonymneho wužiwarja na přeco ignorować (přez jeho IP-adresu)?',
	'comments-block-warning-user' => 'Chceš woprawdźe wšě komentary wužiwarja $1 na přeco ignorować?',
	'comments-delete-warning' => 'Chceće woprawdźe tutón komentar zhašeć?',
	'comments-sort-by-date' => 'Po datumje sortěrować',
	'comments-sort-by-score' => 'Po ličbje dypkow sortěrować',
	'comments-show-comment-link' => 'Komentar pokazać',
	'comments-manage-blocklist-link' => 'Ignorowansku lisćinu zrjadować',
	'comments-ignore-message' => 'Ignoruješ awtora tutoho komentara',
	'comments-you' => 'Ty',
	'comments-reply' => 'Wotmołwić',
	'comments-login-required' => 'Dyrbiš so přizjewić, zo by komentary přidał',
	'comments-not-allowed' => 'Njesměš komentary pósłać.',
	'comments-post' => 'Komentar spisać',
	'comments-submit' => 'Twój komentar přidać',
	'comments-score-text' => 'Ličba dypkow',
	'comments-permalink' => 'Trajny wotkaz',
	'comments-delete-link' => 'Komentar zhašeć',
	'comments-anon-name' => 'Anonymny wužiwar',
	'comments-anon-message' => '{{SITENAME}} wjeseli so wo <b>wšěch komentarach</b>. Jeli nochceš anonymny być, <a href="$1">registruj so</a> abo <a href="$2">přizjew so</a>. To je zadarmo.',
	'comments-ignore-item' => '<a href="$1">$2</a> $3 <a href="$4">(wotblokować)</a>',
	'comments-ignore-no-users' => 'Tuchwilu njejsu žani wužiwarjo zablokowani.',
	'comments-ignore-remove-message' => 'Chceš woprawdźe komentary wužiwarja <b>$1</b> wotblokować?',
	'comments-ignore-unblock' => 'Wotblokować',
	'comments-ignore-cancel' => 'Přetorhnyć',
	'comments-ignore-title' => 'Ignorowanska lisćiny komentarow',
	'commentignorelist' => 'Ignorowanska lisćiny komentarow',
	'comments-no-comments-of-day' => 'Komentary dnja njejsu.',
	'log-name-comments' => 'Komentarowy protokol',
	'log-description-comments' => 'To je komentarowy protokol.',
	'logentry-comments-add' => '$1 je nowy komentar na $3 zawostajił',
	'logentry-comments-delete' => '$1 je komentar #$4 na $3 zhašał',
	'comments-time-ago' => 'před $1',
	'comments-time-days' => '{{PLURAL:$1|$1 dnjom|$1 dnjomaj|$1 dnjemi|$1 dnjemi}}',
	'comments-time-hours' => '{{PLURAL:$1|$1 hodźinu|$1 hodźinomaj|$1 hodźinami|$1 hodźinami}}',
	'comments-time-minutes' => '{{PLURAL:$1|$1 mjeńšinu|$1 mjeńšinomaj|$1 mjeńšinami|$1 mjeńšinami}}',
	'comments-time-seconds' => '{{PLURAL:$1|$1 sekundu|$1 sekundomaj|$1 sekundami|$1 sekundami}}',
	'log-show-hide-comments' => '$1 komentarowy protokol',
	'group-commentadmin' => 'Komentarowi administratorojo',
	'group-commentadmin-member' => '{{GENDER:$1|komentarowy administrator|komentarowa administratorka}}',
	'grouppage-commentadmin' => '{{ns:project}}:Komentarowi administratorojo',
	'right-comment' => 'Komentary wotpósłać',
	'right-commentadmin' => 'Wužiwarske komentary zrjadować',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'comments-comment' => 'Megjegyzés',
	'comments-desc' => 'Hozzáadja a <code>&lt;comments&gt;</code> tag-et, és lehetőséget biztosít megjegyzéseket fűzni a lapokhoz',
	'comments-db-locked' => '<h3>Megjegyzések hozzáadása</h3>Az adatbázis jelenleg rutin karbantartás miatt zárolt, amely után ismét normál állapotba került. Kérlek próbáld meg később!',
	'comments-voted-label' => 'Szavazott',
	'comments-loading' => 'Betöltés…',
	'comments-auto-refresher-enable' => 'Automatikus megjegyzés frissítő engedélyezése',
	'comments-auto-refresher-pause' => 'Automatikus megjegyzés frissítő felfüggesztése',
	'comments-reply-to' => 'Válasz',
	'comments-cancel-reply' => 'Mégse',
	'comments-block-warning-anon' => 'Biztos, hogy véglegesen figyelmen kívül hagyod ezen névtelen szerkesztő valamennyi megjegyzéseit (az IP-címe alapján)?',
	'comments-block-warning-user' => 'Biztos, hogy véglegesen figyelmen kívül hagyod $1 valamennyi megjegyzését?',
	'comments-delete-warning' => 'Biztos, hogy törölni akarod ezt a megjegyzést?',
	'comments-sort-by-date' => 'Rendezés dátum szerint',
	'comments-sort-by-score' => 'Rendezés pont szerint',
	'comments-show-comment-link' => 'Hozzászólás megjelenítése',
	'comments-manage-blocklist-link' => 'Figyelmen kívül hagyott megjegyzések kezelése',
	'comments-ignore-message' => 'Figyelmen kívül hagyod ezen szerző megjegyzéseit',
	'comments-you' => 'Te',
	'comments-reply' => 'Válasz',
	'comments-login-required' => 'Megjegyzés írásához be kell jelentkezned',
	'comments-not-allowed' => 'Nincs jogosultságod megjegyzés írásához.',
	'comments-post' => 'Hozzászólás elküldése',
	'comments-submit' => 'Szólj hozzá!',
	'comments-score-text' => 'Pont:',
	'comments-permalink' => 'Permalink',
	'comments-delete-link' => 'Megjegyzés törlése',
	'comments-anon-name' => 'Névtelen felhasználó',
	'comments-anon-message' => '{{SITENAME}} üdvözöl <b>minden hozzászólást</b>. Ha nem akarsz névtelene lenni, <a href="$1">regisztrálj</a> vagy <a href="$2">jelentkezz be</a>. Ez ingyenes.',
	'comments-ignore-item' => '<a href="$1">$2</a> $3 <a href="$4">(felold)</a>',
	'comments-ignore-no-users' => 'Jelenleg nincs blokkolt felhasználó.',
	'comments-ignore-remove-message' => 'Biztos, hogy meg akarod szüntetni <b>$1</b> felhasználó megjegyzéseinek a blokkolását?',
	'comments-ignore-unblock' => 'Blokk feloldása',
	'comments-ignore-cancel' => 'Mégse',
	'comments-ignore-title' => 'Figyelmen kívül hagyandó megjegyzések listája',
	'commentignorelist' => 'Figyelmen kívül hagyandó megjegyzések listája',
	'comments-no-comments-of-day' => 'Nincs napi hozzászólás.',
	'log-name-comments' => 'Megjegyzés napló',
	'log-description-comments' => 'Ez a megjegyzések naplója',
	'comments-time-ago' => '$1 ezelőtt',
	'comments-time-days' => '{{PLURAL:$1|egy|$1}} nappal',
	'comments-time-hours' => '{{PLURAL:$1|egy|$1}} órával',
	'comments-time-minutes' => '{{PLURAL:$1|egy|$1}} perccel',
	'comments-time-seconds' => '{{PLURAL:$1|egy|$1}} másodperccel',
	'log-show-hide-comments' => '$1 megjegyzés naplót',
	'group-commentadmin' => 'Megjegyzés adminisztrátorok',
	'group-commentadmin-member' => '{{GENDER:$1|megjegyzés adminisztrátor}}',
	'grouppage-commentadmin' => '{{ns:project}}:Megjegyzés adminisztrátorok',
	'right-comment' => 'Megjegyzés küldése',
	'right-commentadmin' => 'Felhasználók által küldött megjegyzések adminisztrálása',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'comments-comment' => 'Commento',
	'comments-desc' => 'Adde un uncino del analysator syntactic <code>&lt;comments&gt;</code> que permitte commentar paginas',
	'comments-db-locked' => '<h3>Addition de commentos</h3>Le base de datos es presentemente serrate pro mantenentia routinari. Postea illo retornara al functionamento normal. Per favor reveni plus tarde.',
	'comments-voted-label' => 'Votate',
	'comments-loading' => 'Cargamento...',
	'comments-auto-refresher-enable' => 'Activar le actualisation automatic de commentos',
	'comments-auto-refresher-pause' => 'Pausar le actualisation automatic de commentos',
	'comments-reply-to' => 'Responder a',
	'comments-cancel-reply' => 'Cancellar',
	'comments-block-warning-anon' => 'Es tu secur de voler ignorar permanentemente tote le commentos de iste usator anonyme (per medio de su adresse IP)?',
	'comments-block-warning-user' => 'Es tu secur de voler ignorar permanentemente tote le commentos del usator $1?',
	'comments-delete-warning' => 'Es tu secur de voler deler iste commento?',
	'comments-sort-by-date' => 'Ordinar per data',
	'comments-sort-by-score' => 'Ordinar per score',
	'comments-show-comment-link' => 'Monstrar commento',
	'comments-manage-blocklist-link' => 'Gerer lista de ignoratos',
	'comments-ignore-message' => 'Tu ignora le autor de iste commento',
	'comments-you' => 'Tu',
	'comments-reply' => 'Responder',
	'comments-login-required' => 'Es necessari aperir session pro poter adder commentos',
	'comments-not-allowed' => 'Tu non ha le permission de commentar.',
	'comments-post' => 'Adder commento',
	'comments-submit' => 'Adder tu commento',
	'comments-score-text' => 'Score',
	'comments-permalink' => 'Permaligamine',
	'comments-delete-link' => 'Deler commento',
	'comments-anon-name' => 'Usator anonyme',
	'comments-anon-message' => '{{SITENAME}} accepta <b>omne commentos</b>. Si tu non vole esser anonyme, <a href="$1">crea un conto</a> o <a href="$2">aperi session</a>. Es gratuite.',
	'comments-links-are-forbidden' => 'Ligamines externe non es permittite in commentos.',
	'comments-is-spam' => 'Le texto submittite del commento ha essite interpretate como spam.',
	'comments-ignore-item' => '<a href="$1">$2</a> le $3 <a href="$4">(disblocar)</a>',
	'comments-ignore-no-users' => 'Il non ha usatores blocate.',
	'comments-ignore-remove-message' => 'Es tu secur de voler disblocar le commentos del usator <b>$1</b>?',
	'comments-ignore-unblock' => 'Disblocar',
	'comments-ignore-cancel' => 'Cancellar',
	'comments-ignore-title' => 'Lista de commentos ignorate',
	'commentignorelist' => 'Lista de commentos ignorate',
	'comments-no-comments-of-day' => 'Il non ha commentos del die.',
	'log-name-comments' => 'Registro de commentos',
	'log-description-comments' => 'Isto es un registro de commentos.',
	'logentry-comments-add' => '$1 lassava un nove commento sur $3',
	'logentry-comments-delete' => '$1 deleva le commento №$4 sur $3',
	'comments-time-ago' => '$1 retro',
	'comments-time-days' => '{{PLURAL:$1|un die|$1 dies}}',
	'comments-time-hours' => '{{PLURAL:$1|un hora|$1 horas}}',
	'comments-time-minutes' => '{{PLURAL:$1|un minuta|$1 minutas}}',
	'comments-time-seconds' => '{{PLURAL:$1|un secunda|$1 secundas}}',
	'log-show-hide-comments' => '$1 le registro de commentos',
	'group-commentadmin' => 'Administratores de commentos',
	'group-commentadmin-member' => '{{GENDER:$1|administrator de commentos}}',
	'grouppage-commentadmin' => '{{ns:project}}:Administratores de commentos',
	'right-comment' => 'Submitter commentos',
	'right-commentadmin' => 'Administrar commentos submittite per usatores',
	'right-commentlinks' => 'Usar ligamines externe in commentos',
);

/** Indonesian (Bahasa Indonesia)
 * @author Farras
 * @author පසිඳු කාවින්ද
 */
$messages['id'] = array(
	'comments-comment' => 'Komentar',
	'comments-loading' => 'Memuat...',
	'comments-reply-to' => 'Balas ke',
	'comments-cancel-reply' => 'Batal',
	'comments-delete-warning' => 'Anda yakin ingin menghapus komentar ini?',
	'comments-sort-by-date' => 'Urut berdasarkan tanggal',
	'comments-sort-by-score' => 'Urut berdasarkan skor',
	'comments-show-comment-link' => 'Tampilkan komentar',
	'comments-you' => 'Anda',
	'comments-reply' => 'Balas',
	'comments-login-required' => 'Anda harus masuk log untuk menambahkan komentar',
	'comments-not-allowed' => 'Anda tidak diizinkan mengirim komentar.',
	'comments-score-text' => 'Skor',
	'comments-ignore-cancel' => 'Batalkan',
	'log-description-comments' => 'Ini adalah log komentar.',
	'comments-time-ago' => '$1 yang lalu',
	'comments-time-days' => '{{PLURAL:$1|satu hari|$1 hari}}',
	'comments-time-hours' => '{{PLURAL:$1|satu jam|$1 jam}}',
	'comments-time-minutes' => '{{PLURAL:$1|satu menit|$1 menit}}',
	'comments-time-seconds' => '{{PLURAL:$1|satu detik|$1 detik}}',
	'right-comment' => 'Kirim komentar',
);

/** Icelandic (íslenska)
 * @author පසිඳු කාවින්ද
 */
$messages['is'] = array(
	'comments-comment' => 'Athugasemd',
	'comments-cancel-reply' => 'Hætta við',
	'comments-reply' => 'Svara',
	'comments-ignore-cancel' => 'Hætta við',
);

/** Italian (italiano)
 * @author Beta16
 * @author Darth Kule
 */
$messages['it'] = array(
	'comments-comment' => 'Commento',
	'comments-desc' => "Aggiunge l'hook del parser <code>&lt;comments&gt;</code> che permette di scrivere commenti sulle pagine",
	'comments-db-locked' => '<h3>Aggiunta di commenti</h3>Il database è attualmente bloccato per la manutenzione ordinaria, dopo la quale tornerà alla normalità. Riprovare più tardi.',
	'comments-voted-label' => 'Votato',
	'comments-loading' => 'Caricamento in corso...',
	'comments-auto-refresher-enable' => "Attivare l'aggiornamento automatico dei commenti",
	'comments-auto-refresher-pause' => "Ferma l'aggiornamento automatico dei commenti",
	'comments-reply-to' => 'Rispondi a',
	'comments-cancel-reply' => 'Annulla',
	'comments-block-warning-anon' => 'Sei sicuro di voler ignorare permanentemente tutti i commenti dei questo utente anonimo (tramite il suo indirizzo IP)?',
	'comments-block-warning-user' => "Sei sicuro di voler ignorare permanentemente tutti i commenti dell'utente $1?",
	'comments-delete-warning' => 'Sei sicuro di volere cancellare questo commento?',
	'comments-sort-by-date' => 'Ordina per data',
	'comments-sort-by-score' => 'Ordina per punteggio',
	'comments-show-comment-link' => 'Mostra commento',
	'comments-manage-blocklist-link' => 'Gestisci lista ignorati',
	'comments-ignore-message' => "Si sta ignorando l'autore di questo commento",
	'comments-you' => ' Tu',
	'comments-reply' => 'Rispondi',
	'comments-login-required' => "È necessario effettuare l'accesso per aggiungere commenti",
	'comments-not-allowed' => 'Non si dispone dei permessi necessari per inviare commenti.',
	'comments-post' => 'Pubblica commento',
	'comments-submit' => 'Aggiungi il tuo commento',
	'comments-score-text' => 'Punteggio',
	'comments-permalink' => 'Link permanente',
	'comments-delete-link' => 'Elimina commento',
	'comments-anon-name' => 'Utente anonimo',
	'comments-anon-message' => '{{SITENAME}} accetta <b>tutti i commenti</b>. Se non vuoi restare anonimo, <a href="$1">registrati</a> o <a href="$2">accedi</a>. È gratuito.',
	'comments-links-are-forbidden' => 'I collegamenti esterni nei commenti sono vietati!',
	'comments-is-spam' => 'Il testo del commento inviato è stato interpretato come spam.',
	'comments-ignore-item' => '<a href="$1">$2</a> il $3 <a href="$4">(sblocca)</a>',
	'comments-ignore-no-users' => 'Non ci sono utenti attualmente bloccati.',
	'comments-ignore-remove-message' => "Sbloccare i commenti dell'utente <b>$1</b>?",
	'comments-ignore-unblock' => 'Sblocca',
	'comments-ignore-cancel' => 'Annulla',
	'comments-ignore-title' => 'Lista ignorati dei commenti',
	'commentignorelist' => 'Lista ignorati dei commenti',
	'comments-no-comments-of-day' => 'Non sono presenti commenti del giorno.',
	'log-name-comments' => 'Commenti',
	'log-description-comments' => 'Di seguito sono elencati i commenti.',
	'logentry-comments-add' => '$1 ha pubblicato un nuovo commento su $3',
	'logentry-comments-delete' => '$1 ha cancellato il commento #$4 su $3',
	'comments-time-ago' => '$1 fa',
	'comments-time-days' => '{{PLURAL:$1|un giorno|$1 giorni}}',
	'comments-time-hours' => "{{PLURAL:$1|un'ora|$1 ore}}",
	'comments-time-minutes' => '{{PLURAL:$1|un minuto|$1 minuti}}',
	'comments-time-seconds' => '{{PLURAL:$1|un secondo|$1 secondi}}',
	'log-show-hide-comments' => '$1 registro commenti',
	'group-commentadmin' => 'Amministratori dei commenti',
	'group-commentadmin-member' => '{{GENDER:$1|amministratore|amministratrice|amministratore/trice}} di commenti',
	'grouppage-commentadmin' => '{{ns:project}}:Amministratori di commenti',
	'right-comment' => 'Invia commenti',
	'right-commentadmin' => 'Gestisce i commenti inviati dagli utenti',
	'right-commentlinks' => 'Usa collegamenti esterni nei commenti',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'comments-comment' => 'コメント',
	'comments-desc' => 'ページにコメントできるようにする、パーサー フック <code>&lt;comments&gt;</code> を追加する',
	'comments-db-locked' => '<h3>コメントの追加</h3>データベースは現在、定期的なデータベース保守作業のためロックされており、終わりしだい正常に戻ります。あとで再度お試しください。',
	'comments-voted-label' => '投票済',
	'comments-loading' => '読み込み中...',
	'comments-auto-refresher-enable' => 'コメントの自動更新を有効化',
	'comments-auto-refresher-pause' => 'コメントの自動更新を一時停止',
	'comments-reply-to' => '返信先',
	'comments-cancel-reply' => 'キャンセル',
	'comments-block-warning-anon' => 'この匿名利用者 (の IP アドレス) によるコメントすべてを本当に永久的に無視しますか?',
	'comments-block-warning-user' => '利用者 $1 によるコメントすべてを本当に永久的に無視しますか?',
	'comments-delete-warning' => 'このコメントを本当に削除しますか?',
	'comments-sort-by-date' => '日付順に並べ替え',
	'comments-sort-by-score' => '得点順に並べ替え',
	'comments-show-comment-link' => 'コメントを表示',
	'comments-manage-blocklist-link' => '無視リストを管理',
	'comments-ignore-message' => 'このコメントの作成者を無視しています',
	'comments-you' => 'あなた',
	'comments-reply' => '返信',
	'comments-login-required' => 'コメントを追加するにはログインしてください',
	'comments-not-allowed' => 'あなたにはコメントを投稿する権限がありません。',
	'comments-post' => 'コメントを投稿',
	'comments-submit' => '自分のコメントを追加',
	'comments-score-text' => '得点',
	'comments-permalink' => '固定リンク',
	'comments-delete-link' => 'コメントを削除',
	'comments-anon-name' => '匿名利用者',
	'comments-anon-message' => '{{SITENAME}}は<b>すべてのコメント</b>を歓迎します。匿名で投稿したくない場合は、<a href="$1">アカウント作成</a>または<a href="$2">ログイン</a>してください。無料です。',
	'comments-links-are-forbidden' => 'コメント内での外部リンクの使用は禁止されています。',
	'comments-is-spam' => '投稿したコメントの本文はスパムと判定されました。',
	'comments-ignore-item' => '<a href="$1">$2</a> - $3 <a href="$4">(ブロック解除)</a>',
	'comments-ignore-no-users' => '現在ブロックされている利用者はいません。',
	'comments-ignore-remove-message' => '利用者 <b>$1</b> によるコメントを本当にブロック解除しますか?',
	'comments-ignore-unblock' => 'ブロック解除',
	'comments-ignore-cancel' => 'キャンセル',
	'comments-ignore-title' => 'コメント無視リスト',
	'commentignorelist' => 'コメント無視リスト',
	'comments-no-comments-of-day' => '今日のコメントはありません。',
	'log-name-comments' => 'コメント記録',
	'log-description-comments' => 'これはコメントの記録です。',
	'logentry-comments-add' => '$1 が $3 に新しいコメントを投稿',
	'logentry-comments-delete' => '$1 が $3 のコメント #$4 を削除',
	'comments-time-ago' => '$1前',
	'comments-time-days' => '{{PLURAL:$1|$1 日}}',
	'comments-time-hours' => '{{PLURAL:$1|$1 時間}}',
	'comments-time-minutes' => '{{PLURAL:$1|$1 分}}',
	'comments-time-seconds' => '{{PLURAL:$1|$1 秒}}',
	'log-show-hide-comments' => 'コメント記録を$1',
	'group-commentadmin' => 'コメント管理者',
	'group-commentadmin-member' => '{{GENDER:$1|コメント管理者}}',
	'grouppage-commentadmin' => '{{ns:project}}:コメント管理者',
	'right-comment' => 'コメントを投稿',
	'right-commentadmin' => '利用者が投稿したコメントを管理',
	'right-commentlinks' => 'コメント内で外部リンクを使用',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'comments-comment' => 'კომენტარი',
	'comments-voted-label' => 'ხმა მიცემულია',
	'comments-loading' => 'იტვირთება…',
	'comments-reply-to' => 'პასუხი',
	'comments-cancel-reply' => 'გაუქმება',
	'comments-delete-warning' => 'დარწმუნებული ხართ, რომ გსურთ ამ კომენტარის წაშლა?',
	'comments-you' => 'თქვენ',
	'comments-reply' => 'პასუხი',
	'comments-post' => 'კომენტარის დატოვება',
	'comments-submit' => 'დაამატეთ თქვენი კომენტარი',
	'comments-score-text' => 'შეფასება',
	'comments-permalink' => 'მუდმივი ბმული',
	'comments-delete-link' => 'კომენტარის წაშლა',
	'comments-anon-name' => 'ანონიმური მომხმარებელი',
	'comments-anon-message' => '{{SITENAME}} მიესალმება <b>ყველა კომენტარს</b>. თუ თქვენ არ გსურთ იყოთ ანონიმი, <a href="$1">დარეგისტრირდით</a> ან <a href="$2">შედით სისტემაში</a>. ეს უფასოა.',
	'comments-ignore-item' => '<a href="$1">$2</a> $3-ზე <a href="$4">(განბლოკვა)</a>',
	'comments-ignore-remove-message' => 'დარწმუნებული ხართ, რომ გსურთ განბლოკოთ მომხმარებელ <b>$1</b>-ის კომენტარი?',
	'comments-ignore-unblock' => 'განბლოკვა',
	'comments-ignore-cancel' => 'გაუქმება',
	'comments-ignore-title' => 'კომენტარის იგნორირების სია',
	'commentignorelist' => 'კომენტარის იგნორირების სია',
	'comments-time-ago' => '$1 წინ',
	'comments-time-days' => '{{PLURAL:$1|ერთი დღე|$1 დღე}}',
	'comments-time-hours' => '{{PLURAL:$1|ერთი საათი|$1 საათი}}',
	'comments-time-minutes' => '{{PLURAL:$1|ერთი წუთი|$1 წუთი}}',
	'comments-time-seconds' => '{{PLURAL:$1|ერთი წამი|$1 წამი}}',
	'group-commentadmin' => 'კომენტარების ადმინისტრატორები',
	'group-commentadmin-member' => '{{GENDER:$1|კომენტარების ადმინისტრატორი}}',
	'grouppage-commentadmin' => '{{ns:project}}:კომენტარების ადმინისტრატორები',
	'right-comment' => 'კომენტარის გაგზავნა',
);

/** Kannada (ಕನ್ನಡ)
 * @author Dimension10
 */
$messages['kn'] = array(
	'comments-comment' => 'ಟಿಪ್ಪಣಿ',
);

/** Korean (한국어)
 * @author LFM
 * @author 아라
 */
$messages['ko'] = array(
	'comments-comment' => '덧글',
	'comments-desc' => '문서에 덧글을 허용하는 <code>&lt;comments&gt;</code> 파서 훅을 추가합니다',
	'comments-db-locked' => '<h3>덧글 추가</h3>데이터베이스가 현재 정기적인 데이터베이스 유지 관리를 위해 잠겨 있으며 이후 정상으로 돌아옵니다. 나중에 다시 확인하세요!',
	'comments-voted-label' => '투표함',
	'comments-loading' => '불러오는 중...',
	'comments-auto-refresher-enable' => '덧글 자동 새로 고침 활성화',
	'comments-auto-refresher-pause' => '덧글 자동 새로 고침 일시 정지',
	'comments-reply-to' => '답변자',
	'comments-cancel-reply' => '취소',
	'comments-block-warning-anon' => '익명 사용자(IP 주소)에서 모든 덧글을 영구적으로 무시하겠습니까?',
	'comments-block-warning-user' => '$1 사용자에서 모든 덧글을 영구적으로 무시하겠습니까?',
	'comments-delete-warning' => '이 덧글을 삭제하겠습니까?',
	'comments-sort-by-date' => '날짜순으로 정렬',
	'comments-sort-by-score' => '점수순으로 정렬',
	'comments-show-comment-link' => '덧글 보기',
	'comments-manage-blocklist-link' => '무시 목록 관리',
	'comments-ignore-message' => '이 덧글을 남긴 사람을 무시하고 있습니다.',
	'comments-you' => '나',
	'comments-reply' => '답변',
	'comments-login-required' => '덧글을 추가하려면 로그인해야 합니다.',
	'comments-not-allowed' => '덧글을 남길 수 있는 권한이 없습니다.',
	'comments-post' => '덧글 남기기',
	'comments-submit' => '덧글을 추가합니다.',
	'comments-score-text' => '점수',
	'comments-permalink' => '고유링크',
	'comments-delete-link' => '덧글 삭제',
	'comments-anon-name' => '익명 사용자',
	'comments-anon-message' => '{{SITENAME}}(은)는 <b>모든 덧글</b>을 환영합니다. 익명을 원하지 않으면 <a href="$1">등록</a>하거나 <a href="$2">로그인</a>하세요. 무료입니다.',
	'comments-ignore-item' => '$3에 <a href="$1">$2</a> <a href="$4">(차단 해제)</a>',
	'comments-ignore-no-users' => '현재 차단된 사용자가 없습니다.',
	'comments-ignore-remove-message' => '정말로 <b>$1</b> 사용자의 덧글을 차단 해제하겠습니까?',
	'comments-ignore-unblock' => '차단 해제',
	'comments-ignore-cancel' => '취소',
	'comments-ignore-title' => '덧글 무시 목록',
	'commentignorelist' => '덧글 무시 목록',
	'comments-no-comments-of-day' => '오늘의 덧글이 없습니다.',
	'log-name-comments' => '덧글 기록',
	'log-description-comments' => '덧글의 기록입니다.',
	'logentry-comments-add' => '$1 사용자가 $3에 새 덧글을 남겼습니다',
	'logentry-comments-delete' => '$1 사용자가 $3에 덧글 #$4(을)를 삭제했습니다',
	'comments-time-ago' => '$1 전',
	'comments-time-days' => '{{PLURAL:$1|1일|$1일}}',
	'comments-time-hours' => '{{PLURAL:$1|1시간|$1시간}}',
	'comments-time-minutes' => '{{PLURAL:$1|1분|$1분}}',
	'comments-time-seconds' => '{{PLURAL:$1|1초|$1초}}',
	'log-show-hide-comments' => '$1 덧글 기록',
	'group-commentadmin' => '덧글 관리자',
	'group-commentadmin-member' => '{{GENDER:$1|덧글 관리자}}',
	'grouppage-commentadmin' => '{{ns:project}}:덧글 관리자',
	'right-comment' => '덧글 제출',
	'right-commentadmin' => '사용자가 제출한 덧글 관리',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'comments-comment' => 'Aanmärkong',
	'comments-voted-label' => 'Afjeschtemmp',
	'comments-loading' => 'Ben aam Laade{{int:ellipsis}}',
	'comments-reply-to' => 'Antowoote aan:',
	'comments-cancel-reply' => 'Ophüre',
	'comments-delete-warning' => 'Wells De heh dä Beidraach verhaftesch fottschmieße?',
	'comments-sort-by-date' => 'Nohm Dattum zoteere',
	'comments-show-comment-link' => 'Aanmerkong aanzeije',
	'comments-ignore-message' => 'Do övverjeihß dä Schriiver vun heh däm Beidraach',
	'comments-you' => 'Do',
	'comments-reply' => 'Antwoot',
	'comments-login-required' => 'Do moß enjelogg sin, öm Aanmärkonge zoh Sigge schriive ze dörve',
	'comments-not-allowed' => 'Do moß enjelogg sin, öm Aanmärkonge zoh Sigge schriive ze dörve',
	'comments-post' => 'En Aanmärkong dobei donn',
	'comments-submit' => 'Donn Ding Aanmärkong derbei',
	'comments-score-text' => 'Punkte',
	'comments-permalink' => 'Ene duurhafte Lengk',
	'comments-delete-link' => 'Aanmärkong fottschmiiße',
	'comments-anon-name' => 'Nameloose Metmaacher',
	'comments-ignore-no-users' => 'Em Momang sen hein Metmaacher jeschpärrt.',
	'comments-ignore-unblock' => 'Sperr ophävve',
	'comments-ignore-cancel' => 'Ophüre',
	'comments-no-comments-of-day' => 'Mer hann_er kein Aanmärkonge aan däm Daach.',
	'log-name-comments' => 'Logbooch met Aanmärkonge',
	'log-description-comments' => 'Heh is est Logbooch met Aanmärkonge',
	'comments-time-ago' => 'vör $1',
	'comments-time-days' => '{{PLURAL:$1|einem Daach|$1 Dääsch|keinem Daach}}',
	'comments-time-hours' => '{{PLURAL:$1|eine Schtond|$1 Schtonde|keinem Schtond}}',
	'comments-time-minutes' => '{{PLURAL:$1|eine Menutt|$1 Menutte|keine Menutt}}',
	'comments-time-seconds' => '{{PLURAL:$1|eine Sekund|$1 Sekunde|keine Sekund}}',
	'log-show-hide-comments' => 'Et Logbooch vun de Aanmärkonge $1',
	'group-commentadmin' => 'Vewallder vun de Aanmärkonge',
	'group-commentadmin-member' => '{{GENDER:$1|Vewallder vun de Aanmärkonge|Vewallderėn vun de Aanmärkonge|Vewallder vun de Aanmärkonge|Vewallderėn vun de Aanmärkonge|Vewallder vun de Aanmärkonge}}',
	'grouppage-commentadmin' => '{{ns:project}}:{{int:group-commentadmin}}',
	'right-comment' => 'Aanmärkonge enjävve',
	'right-commentadmin' => 'Aanmärkonge vun Metmaachere Verwallde',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'comments-comment' => 'Bemierkung',
	'comments-desc' => "Setzt d'Parsererweiderung <code>&lt;comments&gt;</code> dobäi déi et erlaabt fir Säiten ze kommentéieren",
	'comments-db-locked' => "<h3>Bemierkungen dobäisetzen</h3> D'Datebank ass elo wéinst Maintenance-Aarbechte gespaart. Probéiert w.e.g. méi spéit nach eng Kéier.",
	'comments-voted-label' => 'Ofgestëmmt',
	'comments-loading' => 'Lueden...',
	'comments-auto-refresher-enable' => 'Automatesch Aktualisatioun vun de Bemierkungen aschalten',
	'comments-auto-refresher-pause' => 'Automatesch Aktualisatioun vun de Bemierkungen ausschalten',
	'comments-reply-to' => 'Äntwerten',
	'comments-cancel-reply' => 'Ofbriechen',
	'comments-block-warning-anon' => 'Sidd Dir sécher datt Dir definitiv all Bemierkunge vun dësem anonyme Benotzer (iwwer seng IP-Adress) ignoréiere wëllt?',
	'comments-block-warning-user' => 'Sidd Dir sécher datt Dir definitiv all Bemierkunge vum Benotzer $1 ignoréiere wëllt?',
	'comments-delete-warning' => 'Sidd Dir sécher datt Dir dës Bemierkung läsche wëllt?',
	'comments-sort-by-date' => 'Nom Datum zortéieren',
	'comments-sort-by-score' => 'Nom Score zortéieren',
	'comments-show-comment-link' => 'Bemierkung weisen',
	'comments-manage-blocklist-link' => 'Lëscht vun den ignoréierte Bemierkungen geréieren',
	'comments-ignore-message' => 'Dir ignoréiert den Auteur vun dëser Bemierkung',
	'comments-you' => 'Dir',
	'comments-reply' => 'Äntwerten',
	'comments-login-required' => 'Dir musst ageloggt si fir Bemierkungen dobäizesetzen',
	'comments-not-allowed' => 'Dir däerft keng Bemierkungen dobäisetzen.',
	'comments-post' => 'Bemierkung dobäisetzen',
	'comments-submit' => 'Setzt Är Bemierkung dobäi',
	'comments-score-text' => 'Score',
	'comments-permalink' => 'Permanentlink',
	'comments-delete-link' => 'Bemierkung läschen',
	'comments-anon-name' => 'Anonyme Benotzer',
	'comments-anon-message' => '{{SITENAME}} freet sech iwwer <b>all Bemierkungen</b>. Wann Dir net anonym bleiwe wëllt, <a href="$1">da mellt Iech w.e.g. un</a> oder <a href="$2">loggt Iech an</a>. Et ass gratis.',
	'comments-links-are-forbidden' => 'Extern Linken a Bemierkunge si verbueden!',
	'comments-ignore-item' => '<a href="$1">$2</a> ëm $3 <a href="$4">(Spär ophiewen)</a>',
	'comments-ignore-no-users' => 'Et sinn elo keng Benotzer gespaart.',
	'comments-ignore-remove-message' => "Sidd Dir sécher datt Dir d'Spär fir d'Bemierkunge vum Benotzer <b>$1</b> ophiewe wëllt?",
	'comments-ignore-unblock' => 'Spär ophiewen',
	'comments-ignore-cancel' => 'Ofbriechen',
	'comments-ignore-title' => 'Lëscht vun den ignoréierte Bemierkungen',
	'commentignorelist' => 'Lëscht vun den ignoréierte Bemierkungen',
	'comments-no-comments-of-day' => 'Et gëtt keng Bemierkunge vum Dag.',
	'log-name-comments' => 'Logbuch vun de Bemierkungen',
	'log-description-comments' => 'Dëst ass eng Lëscht vun all Bemierkungen.',
	'logentry-comments-add' => '$1 huet eng nei Bemierkung op $3 gemaach',
	'logentry-comments-delete' => "$1 huet d'Bemierkung #$4 op $3 geläscht",
	'comments-time-ago' => 'viru(n) $1',
	'comments-time-days' => '{{PLURAL:$1|engem Dag|$1 Deeg}}',
	'comments-time-hours' => '{{PLURAL:$1|enger Stonn|$1 Stonnen}}',
	'comments-time-minutes' => '{{PLURAL:$1|enger Minutt|$1 Minutten}}',
	'comments-time-seconds' => '{{PLURAL:$1|enger Sekonn|$1 Sekonnen}}',
	'log-show-hide-comments' => 'Logbuch vun de Bemierkunge $1',
	'group-commentadmin' => 'Administrateure fir Bemierkungen',
	'right-comment' => 'Bemierkunge späicheren',
	'right-commentadmin' => 'Bemierkunge vu Benotzer verwalten',
	'right-commentlinks' => 'Extern Linken a Bemierkunge benotzen',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 */
$messages['lt'] = array(
	'comments-comment' => 'Komentaras',
	'comments-voted-label' => 'Balsavo',
	'comments-loading' => 'Įkeliama…',
	'comments-reply-to' => 'Atsakyti į',
	'comments-cancel-reply' => 'Atšaukti',
	'comments-delete-warning' => 'Ar tikrai norite ištrinti šį komentarą?',
	'comments-sort-by-date' => 'Rūšiuoti pagal datą',
	'comments-sort-by-score' => 'Rūšiuoti pagal rezultatą',
	'comments-show-comment-link' => 'Rodyti komentarą',
	'comments-manage-blocklist-link' => 'Valdyti ignoravimo sąrašą',
	'comments-ignore-message' => 'Jūs ignoruojate šio komentaro autorių',
	'comments-you' => 'Jūs',
	'comments-reply' => 'Atsakyti',
	'comments-login-required' => 'Jūs turite būti prisijungęs jei norite pridėti komentarus',
	'comments-not-allowed' => 'Jums neleidžiama rašyti komentarus.',
	'comments-post' => 'Rašyti komentarą',
	'comments-submit' => 'Pridėk savo komentarą',
	'comments-score-text' => 'Rezultatas',
	'comments-delete-link' => 'Ištrinti komentarą',
	'comments-anon-name' => 'Anoniminis vartotojas',
	'comments-ignore-no-users' => 'Šiuo metu nėra užblokuotų vartotojų.',
	'comments-ignore-remove-message' => 'Ar tikrai norite atblokuoti vartotojo <b>$1</b> komentarus?',
	'comments-ignore-unblock' => 'Atblokuoti',
	'comments-ignore-cancel' => 'Atšaukti',
	'log-name-comments' => 'Komentarų žurnalas',
	'comments-time-ago' => 'prieš $1',
	'right-comment' => 'Siųsti komentarus',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'comments-voted-label' => 'Nobalsots',
	'comments-loading' => 'Ielādē…',
	'comments-reply-to' => 'Atbildēt uz',
	'comments-cancel-reply' => 'Atcelt',
	'comments-sort-by-date' => 'Kārtot pēc datuma',
	'comments-sort-by-score' => 'Kārtot pēc vērtējuma',
	'comments-show-comment-link' => 'Parādīt komentāru',
	'comments-reply' => 'Atbildēt',
	'comments-login-required' => 'Jums ir jāpieslēdzas, lai pievienotu komentārus',
	'comments-not-allowed' => 'Jums nav atļauts publicēt komentārus.',
	'comments-post' => 'Publicēt komentāru',
	'comments-submit' => 'Pievienot savu komentāru',
	'comments-score-text' => 'Vērtējums',
	'comments-permalink' => 'Pastāvīgā saite',
	'comments-delete-link' => 'Dzēst komentāru',
	'comments-anon-name' => 'Anonīms lietotājs',
	'comments-ignore-unblock' => 'Atbloķēt',
	'comments-ignore-cancel' => 'Atcelt',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'comments-comment' => 'Коментар',
	'comments-desc' => 'Додава парсерска кука <code>&lt;comments&gt;</code> што овозможува коментирање на страниците',
	'comments-db-locked' => '<h3>Давање на коментари</h3>Базата е моментално заклучена за редовно одржување, и потоа ќе се врати во нормална работна состојба. Навратете се подоцна!',
	'comments-voted-label' => 'Гласано',
	'comments-loading' => 'Вчитувам...',
	'comments-auto-refresher-enable' => 'Вклучи автопревчитување на коментарите',
	'comments-auto-refresher-pause' => 'Исклучи автопревчитување на коментарите',
	'comments-reply-to' => 'Одговори на',
	'comments-cancel-reply' => 'Откажи',
	'comments-block-warning-anon' => 'Дали сте сигурни дека сакате трајно да ги занемарите сите коментари од овој анонимен корисник (преку неговата IP-адреса)?',
	'comments-block-warning-user' => 'Дали сте сигурни дека сакате трајно да ги занемарите сите коментари од корисникот $1?',
	'comments-delete-warning' => 'Дали сте сигурни дека сакате да го избришете коментарот?',
	'comments-sort-by-date' => 'Подреди по датум',
	'comments-sort-by-score' => 'Подреди по бодови',
	'comments-show-comment-link' => 'Прикажи коментар',
	'comments-manage-blocklist-link' => 'Раководење со списокот на занемарени',
	'comments-ignore-message' => 'Го занемарувате авторот на коментаров',
	'comments-you' => ' Вие',
	'comments-reply' => 'Одговори',
	'comments-login-required' => 'Мора да сте најавени за да давате кометари',
	'comments-not-allowed' => 'Не ви е дозволено да објавувате коментари.',
	'comments-post' => 'Објави коментар',
	'comments-submit' => 'Дајте свој комнетар',
	'comments-score-text' => 'Бодови',
	'comments-permalink' => 'Постојана врска',
	'comments-delete-link' => 'Избриши коментар',
	'comments-anon-name' => 'Анонимен корисник',
	'comments-anon-message' => 'На {{SITENAME}} се добредојдени <b>секакви коментари</b>.  Ако не сакате да бидете анонимни, <a href="$1">регистрирајте се</a> или <a href="$2">најавете се</a>. Бесплатно е.',
	'comments-links-are-forbidden' => 'Во коментарите се забранети надворешни врски!',
	'comments-is-spam' => 'Поднесениот текст на коментарот беше протолкуван како спам.',
	'comments-ignore-item' => '<a href="$1">$2</a> на $3 <a href="$4">(одблокирај)</a>',
	'comments-ignore-no-users' => 'Моментално нема блокирани корисници.',
	'comments-ignore-remove-message' => 'Дали сте сигурни дека сакате да ги одблокирате коментарите на корисникот <b>$1</b>?',
	'comments-ignore-unblock' => 'Одблокирај',
	'comments-ignore-cancel' => 'Откажи',
	'comments-ignore-title' => 'Список на занемарени коментари',
	'commentignorelist' => 'Список на занемарени коментари',
	'comments-no-comments-of-day' => 'Нема коментари на денот.',
	'log-name-comments' => 'Дневник на коментари',
	'log-description-comments' => 'Ова е дневник на коментар.',
	'logentry-comments-add' => '$1 објави нов коментар на $3',
	'logentry-comments-delete' => '$1 го избриша коментарот бр. $4 на $3',
	'comments-time-ago' => 'пред $1',
	'comments-time-days' => '{{PLURAL:$1|еден ден|$1 дена}}',
	'comments-time-hours' => '{{PLURAL:$1|еден час|$1 часа}}',
	'comments-time-minutes' => '{{PLURAL:$1|една минута|$1 минути}}',
	'comments-time-seconds' => '{{PLURAL:$1|една секунда|$1 секунди}}',
	'log-show-hide-comments' => '$1 дневник на коментари',
	'group-commentadmin' => 'Администратори на коментари',
	'group-commentadmin-member' => '{{GENDER:$1|администратор на коментари}}',
	'grouppage-commentadmin' => '{{ns:project}}:Администратори на коментари',
	'right-comment' => 'Поднесување на коментари',
	'right-commentadmin' => 'Раководење со кориснички коментари',
	'right-commentlinks' => 'Употреба на надворешни врски во коментарите',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'comments-comment' => 'शेरा',
	'comments-desc' => '<code>&lt;comments&gt;</code>हा पार्सरहूक जोडते ज्याने पानावर शेरे टाकणे शक्य होते.',
	'comments-loading' => 'प्रभारण करीत आहे',
	'comments-auto-refresher-enable' => 'शेरा स्वयं-तरोताजा करणे शक्य करा',
	'comments-auto-refresher-pause' => 'शेरा स्वयं-तरोताजा करणे थोडा वेळ थांबवा',
	'comments-reply-to' => 'ला उत्तर द्या',
	'comments-cancel-reply' => 'रद्द करा',
	'comments-sort-by-date' => 'तारखेनुसार निवड करा',
	'comments-sort-by-score' => 'प्राप्तांकानुसार निवड करा',
	'comments-show-comment-link' => 'शेरा दाखवा',
	'comments-ignore-message' => 'आपण या शेऱ्याच्या लेखकास टाळत आहात',
	'comments-you' => 'आपण',
	'comments-reply' => 'उत्तर',
	'comments-submit' => 'आपला शेरा जोडा',
	'comments-score-text' => 'प्राप्तांक',
	'comments-delete-link' => 'शेरा वगळा',
	'comments-anon-name' => 'अनामिक सदस्य',
	'logentry-comments-add' => '$1 ने $3 वर एक नविन शेरा टाकला',
	'logentry-comments-delete' => '$1 ने $3 वरचा #$4 हा शेरा वगळला',
	'comments-time-ago' => '$1पूर्वी',
	'comments-time-days' => '{{PLURAL:$1|एक दिवस|$1 दिवस}}',
	'comments-time-hours' => '{{PLURAL:$1|एक तास|$1 तास}}',
	'comments-time-minutes' => '{{PLURAL:$1|एक मिनीट|$1 मिनीट}}',
	'comments-time-seconds' => '{{PLURAL:$1|एक सेकंद|$1 सेकंद}}',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'comments-comment' => 'Komen',
	'comments-desc' => 'Membubuh penghurai <code>&lt;comments&gt;</code> yang membolehkan komen pada halaman',
	'comments-db-locked' => '<h3>Menambah komen</h3>Pangkalan data kini dikunci untuk kerja penyelenggaraan rutin, selepas ini kembali normal. Sila datang balik nanti!',
	'comments-voted-label' => 'Diundi',
	'comments-loading' => 'Sedang dimuatkan...',
	'comments-auto-refresher-enable' => 'Hidupkan pengemaskini komen automatik',
	'comments-auto-refresher-pause' => 'Rehatkan pengemaskini komen automatik',
	'comments-reply-to' => 'Balas',
	'comments-cancel-reply' => 'Batalkan',
	'comments-block-warning-anon' => 'Adakah anda benar-benar ingin mengabaikan semua komen daripada pengguna awanama ini (melalui alamat IP-nya) buat selama-lamanya?',
	'comments-block-warning-user' => 'Adakah anda benar-benar ingin mengabaikan semua komen daripada pengguna $1 buat selama-lamanya?',
	'comments-delete-warning' => 'Adakah anda benar-benar ingin memadamkan komen ini?',
	'comments-sort-by-date' => 'Isih ikut tarikh',
	'comments-sort-by-score' => 'Isih ikut markah',
	'comments-show-comment-link' => 'Paparkan komen',
	'comments-manage-blocklist-link' => 'Uruskan senarai abai',
	'comments-ignore-message' => 'Anda sedang mengabaikan penulis komen ini',
	'comments-you' => 'Anda',
	'comments-reply' => 'Balas',
	'comments-login-required' => 'Anda mesti log masuk untuk menambah komen',
	'comments-not-allowed' => 'Anda tidak dibenarkan menghantar komen.',
	'comments-post' => 'Hantar komen',
	'comments-submit' => 'Letakkan komen anda',
	'comments-score-text' => 'Markah',
	'comments-permalink' => 'Pautan kekal',
	'comments-delete-link' => 'Padamkan komen',
	'comments-anon-name' => 'Pengguna awanama',
	'comments-anon-message' => '{{SITENAME}} mengalu-alukan <b>semua komen</b>. Jika anda tidak mahu berawanama, sila <a href="$1">daftar</a> atau <a href="$2">log masuk</a>. Percuma.',
	'comments-links-are-forbidden' => 'Pautan luar dilarang dalam komen!',
	'comments-is-spam' => 'Teks komen yang dihantar ini ditafsir sebagai spam.',
	'comments-ignore-item' => '<a href="$1">$2</a> pada $3 <a href="$4">(nyahsekat)</a>',
	'comments-ignore-no-users' => 'Tiada pengguna yang disekat sekarang.',
	'comments-ignore-remove-message' => 'Adakah anda benar-benar ingin menyahsekat komen-komen pengguna <b>$1</b>?',
	'comments-ignore-unblock' => 'Nyahsekat',
	'comments-ignore-cancel' => 'Batalkan',
	'comments-ignore-title' => 'Senarai abai komen',
	'commentignorelist' => 'Senarai abai komen',
	'comments-no-comments-of-day' => 'Tiada komen pada hari ini.',
	'log-name-comments' => 'Log komen',
	'log-description-comments' => 'Ini ialah log komen.',
	'comments-time-ago' => '$1 yang lalu',
	'comments-time-days' => '{{PLURAL:$1|sehari|$1 hari}}',
	'comments-time-hours' => '{{PLURAL:$1|sejam|$1 jam}}',
	'comments-time-minutes' => '{{PLURAL:$1|seminit|$1 minit}}',
	'comments-time-seconds' => '{{PLURAL:$1|sesaat|$1 saat}}',
	'log-show-hide-comments' => '$1 log komen',
	'group-commentadmin' => 'Penyelia Komen',
	'group-commentadmin-member' => '{{GENDER:$1|penyelia komen}}',
	'grouppage-commentadmin' => '{{ns:project}}:Penyelia Komen',
	'right-comment' => 'Menghantar komen',
	'right-commentadmin' => 'Mentadbir urus komen serahan pengguna',
	'right-commentlinks' => 'Menggunakan pautan luar dalam komen',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'comments-comment' => 'Kumment',
	'comments-desc' => "Iżżid il-''parser hook'' <code>&lt;comments&gt;</code> li tippermetti l-kummenti fuq paġni",
	'comments-voted-label' => 'Ivvutajt',
	'comments-loading' => "Tiela'...",
	'comments-auto-refresher-enable' => 'Attiva l-aġġornament awtomatikament tal-kummenti',
	'comments-auto-refresher-pause' => 'Waqqaf l-aġġornament awtomatikament tal-kummenti',
	'comments-reply-to' => 'Irrispondi lil',
	'comments-cancel-reply' => 'Ħassar',
	'comments-block-warning-anon' => 'Inti ċert li tixtieq tinjora għal kollox il-kummenti minn utenti anonimi (permezz tal-indirizz IP)?',
	'comments-block-warning-user' => 'Inti ċert li tixtieq tinjora għal kollox il-kummenti mill-utent $1?',
	'comments-delete-warning' => 'Inti ċert li tixtieq tħassar dan il-kumment?',
	'comments-sort-by-date' => 'Ordna skont id-data',
	'comments-sort-by-score' => 'Ordna skont il-punteġġ',
	'comments-show-comment-link' => 'Uri l-kumment',
	'comments-ignore-message' => "Inti qiegħed tinjora l-awtur ta' dan il-kumment",
	'comments-you' => 'Inti',
	'comments-reply' => 'Irrispondi',
	'comments-login-required' => "Trid tkun fil-kont tiegħek sabiex tkun tista' iżżid kummenti",
	'comments-not-allowed' => 'Inti ma tistax tħalli kummenti.',
	'comments-post' => 'Ibgħat il-kumment',
	'comments-submit' => 'Żid il-kumment tiegħek',
	'comments-score-text' => 'Punteġġ',
	'comments-permalink' => 'Ħolqa permanenti',
	'comments-delete-link' => 'Ħassar il-kumment',
	'comments-anon-name' => 'Utent anonimu',
	'comments-anon-message' => '{{SITENAME}} tilqa\' il-<b>kummenti kollha</b>. Jekk ma tridx li tibqa\' anonimu, <a href="$1">irreġistra</a> jew <a href="$2">idħol fil-kont</a>. Dan huwa b\'xejn.',
	'comments-ignore-item' => '<a href="$1">$2</a> nhar il-$3 <a href="$4">(żblokka)</a>',
	'comments-ignore-no-users' => "M'hemm l-ebda utent li huwa attwalment imblukkat.",
	'comments-ignore-remove-message' => 'Inti ċert li tixtieq tiżblokka l-kummenti tal-utent <b>$1</b>?',
	'comments-ignore-unblock' => 'Żblokka',
	'comments-no-comments-of-day' => "M'hemm l-ebda kummenti tal-ġurnata.",
	'log-name-comments' => 'Reġistru tal-kummenti',
	'log-description-comments' => 'Dan huwa reġistru tal-kummenti.',
);

/** Low German (Plattdüütsch)
 * @author Joachim Mos
 */
$messages['nds'] = array(
	'comments-comment' => 'Kommentar',
	'comments-loading' => 'Läädt…',
	'comments-cancel-reply' => 'Afbreken',
	'comments-you' => 'Du',
);

/** Dutch (Nederlands)
 * @author Hansmuller
 * @author Mark van Alphen
 * @author Mitchel Corstjens
 * @author SPQRobin
 * @author Siebrand
 * @author Wiki13
 */
$messages['nl'] = array(
	'comments-comment' => 'Reactie',
	'comments-desc' => "Voegt de parserhook <code>&lt;comments&gt;</code> toe die het mogelijk maakt te reageren op pagina's",
	'comments-db-locked' => '<h3>Reacties toevoegen</h3>De database is gesloten voor onderhoud. Probeer het later opnieuw.',
	'comments-voted-label' => 'Gestemd',
	'comments-loading' => 'Bezig met laden…',
	'comments-auto-refresher-enable' => 'Automatisch bijwerken van reacties inschakelen',
	'comments-auto-refresher-pause' => 'Automatisch bijwerken van reacties pauzeren',
	'comments-reply-to' => 'Reageren op',
	'comments-cancel-reply' => 'Annuleren',
	'comments-block-warning-anon' => 'Weet u zeker dat u permanent alle reacties van deze anonieme gebruiker wilt negeren (via het IP-adres)?',
	'comments-block-warning-user' => 'Weet u zeker dat u alle reacties van $1 permanent wilt negeren?',
	'comments-delete-warning' => 'Weet u zeker dat u deze reactie wilt verwijderen?',
	'comments-sort-by-date' => 'Op datum sorteren',
	'comments-sort-by-score' => 'Op score sorteren',
	'comments-show-comment-link' => 'Reactie weergeven',
	'comments-manage-blocklist-link' => 'Negeerlijst beheren',
	'comments-ignore-message' => 'U negeert de auteur van deze reactie',
	'comments-you' => 'U',
	'comments-reply' => 'Antwoorden',
	'comments-login-required' => 'U moet aangemeld zijn om reacties toe te kunnen voegen',
	'comments-not-allowed' => 'U mag niet reageren.',
	'comments-post' => 'Reactie toevoegen',
	'comments-submit' => 'Reageren',
	'comments-score-text' => 'Score',
	'comments-permalink' => 'Permanente koppeling',
	'comments-delete-link' => 'Reactie verwijderen',
	'comments-anon-name' => 'Anonieme gebruiker',
	'comments-anon-message' => '{{SITENAME}} verwelkomt <b>alle reacties</b>. Als u niet anoniem wilt zijn, <a href="$1">Registreer</a> u dan of <a href="$2">meld u aan</a>.',
	'comments-links-are-forbidden' => 'Externe koppelingen in reacties zijn niet toegestaan!',
	'comments-is-spam' => 'De opgegeven reactie is herhemd als spam.',
	'comments-ignore-item' => '<a href="$1">$2</a> op $3 <a href="$4">(zichtbaar maken)</a>',
	'comments-ignore-no-users' => 'Er zijn momenteel geen gebruikers geblokkeerd.',
	'comments-ignore-remove-message' => 'Weet u zeker dat u de reacties van <b>$1</b> weer wilt zien?',
	'comments-ignore-unblock' => 'Deblokkeren',
	'comments-ignore-cancel' => 'Annuleren',
	'comments-ignore-title' => 'Negeerlijst voor reacties',
	'commentignorelist' => 'Lijst voor te negeren reacties',
	'comments-no-comments-of-day' => 'Er zijn geen reacties van de dag.',
	'log-name-comments' => 'Berichtenlogboek',
	'log-description-comments' => 'Dit is een logboek over reacties.',
	'logentry-comments-add' => '$1 stuurde een nieuwe opmerking over $3 in.',
	'logentry-comments-delete' => '$1 haalde commentaar #$4 over $3 weg.',
	'comments-time-ago' => '$1 geleden',
	'comments-time-days' => '{{PLURAL:$1|Eén dag|$1 dagen}}',
	'comments-time-hours' => '{{PLURAL:$1|Eén uur|$1 uren}}',
	'comments-time-minutes' => '{{PLURAL:$1|Eén minuut|$1 minuten}}',
	'comments-time-seconds' => '{{PLURAL:$1|Eén seconde|$1 seconden}}',
	'log-show-hide-comments' => 'Opmerkingenlogboek $1',
	'group-commentadmin' => 'Reactiebeheerders',
	'group-commentadmin-member' => '{{GENDER:$1|Opmerkingenbeheerder}}',
	'grouppage-commentadmin' => '{{ns:project}}:Opmerkingenbeheerders',
	'right-comment' => 'Reacties toevoegen',
	'right-commentadmin' => 'Gebruikersreacties beheren',
	'right-commentlinks' => 'Externe koppelingen in reacties gebruiken',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'comments-block-warning-anon' => 'Weet je zeker dat je permanent alle reacties van deze anonieme gebruiker wilt negeren (via het IP-adres)?',
	'comments-block-warning-user' => 'Weet je zeker dat je alle reacties van $1 permanent wilt negeren?',
	'comments-delete-warning' => 'Weet je zeker dat je deze reactie wilt verwijderen?',
	'comments-ignore-message' => 'Je negeert de auteur van deze reactie',
	'comments-you' => 'Jij',
	'comments-login-required' => 'Je moet aangemeld zijn om reacties toe te kunnen voegen',
	'comments-not-allowed' => 'Je mag niet reageren.',
	'comments-anon-message' => '{{SITENAME}} verwelkomt <b>alle reacties</b>. Als je niet anoniem wilt zijn, <a href="$1">Registreer</a> je dan of <a href="$2">meld je aan</a>.',
	'comments-ignore-remove-message' => 'Weet je zeker dat je de reacties van <b>$1</b> weer wilt zien?',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'comments-comment' => 'Comentari',
	'comments-voted-label' => 'Votat',
	'comments-loading' => 'Cargament...',
	'comments-reply-to' => 'Respondre a',
	'comments-cancel-reply' => 'Anullar',
	'comments-sort-by-date' => 'Triar per data',
	'comments-you' => 'Vos',
	'comments-reply' => 'Respondre',
	'comments-permalink' => 'Ligam permanent',
	'comments-ignore-unblock' => 'Desblocar',
	'comments-ignore-cancel' => 'Anullar',
	'comments-time-ago' => 'I a $1',
	'comments-time-days' => '{{PLURAL:$1|un jorn|$1 jorns}}',
	'comments-time-hours' => '{{PLURAL:$1|una ora|$1 oras}}',
	'comments-time-minutes' => '{{PLURAL:$1|una minuta|$1 minutas}}',
	'comments-time-seconds' => '{{PLURAL:$1|una segonda|$1 segondas}}',
	'log-show-hide-comments' => 'jornal de comentaris $1',
	'group-commentadmin' => 'Administrators de comentaris',
	'group-commentadmin-member' => '{{GENDER:$1|administrator de comentaris|administratritz de comentaris}}',
	'grouppage-commentadmin' => '{{ns:project}}:Administrators de comentaris',
	'right-comment' => 'Publicar los comentaris',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 */
$messages['or'] = array(
	'comments-comment' => 'ମତାମତ',
	'comments-voted-label' => 'ମତଦାନ',
	'comments-loading' => 'ଖୋଲୁଅଛି...',
	'comments-reply-to' => 'କୁ ଉତ୍ତର ଦେବେ',
	'comments-cancel-reply' => 'ବାତିଲ',
	'comments-block-warning-user' => 'ଆପଣ ନିଶ୍ଚିତ ଯେ $1ବ୍ୟବହାରକାରୀ ଦ୍ଵାରା ସମସ୍ତ ମତକୁ ସ୍ଥାୟୀରୂପେ ଅଣଦେଖା କରିବେ ?',
	'comments-delete-warning' => 'ଆପଣ ନିଶ୍ଚିତ ଭାବେ ଏହି ମତଟିକୁ ହଟାଇବାକୁ ଚାହୁଁଛନ୍ତି ?',
	'comments-sort-by-date' => 'ତାରିଖ ଅନୁଯାୟୀ ସଜାଇବେ',
	'comments-show-comment-link' => 'ମନ୍ତବ୍ୟଗୁଡ଼ିକୁ ଦେଖାଇବେ',
	'comments-manage-blocklist-link' => 'ଅଣଦେଖା ତାଳିକାଟିକୁ ପରିଚାଳନା କରିବେ',
	'comments-ignore-message' => 'ଆପଣ ଏହି ମନ୍ତବ୍ୟର ଲେଖକଙ୍କୁ ଅଣଦେଖା କରୁଛନ୍ତି',
	'comments-you' => 'ଆପଣ',
	'comments-reply' => 'ଉତ୍ତର',
	'comments-login-required' => 'ଆପଣଙ୍କୁ ମନ୍ତବ୍ୟଦେବା ପାଇଁ ଲଗଇନ କରିବାକୁ ପଡିବ',
	'comments-not-allowed' => 'ଆପଣଙ୍କୁ ମନ୍ତବ୍ୟ ଦେବା ପାଇଁ ଅନୁମତି ନାହିଁ ।',
	'comments-post' => 'ମତ ଦେବେ',
	'comments-submit' => 'ଆପଣଙ୍କ ମତ ଦେବେ',
	'comments-score-text' => 'ଗଣନା',
	'comments-delete-link' => 'ମତ ହଟାଇବେ',
	'comments-ignore-no-users' => 'ଏବେ କୌଣସି ବ୍ୟବହାରକାରୀଙ୍କୁ କିଳାଯାଇନାହିଁ ।',
	'comments-ignore-cancel' => 'ବାତିଲ',
	'comments-ignore-title' => 'ମତ ଅଣଦେଖା ତାଲିକା',
	'commentignorelist' => 'ମତ ଅଣଦେଖା ତାଲିକା',
	'comments-no-comments-of-day' => 'ଆଜି ପାଇଁ  କୌଣସି ମତ ନାହିଁ ।',
	'log-name-comments' => 'ମନ୍ତବ୍ୟ ତାଲିକା',
	'log-description-comments' => 'ଏହା ମନ୍ତବ୍ୟଗୁଡିକର ଏକ ତାଲିକା ।',
	'comments-time-ago' => '$1 ପୂର୍ବରୁ',
	'group-commentadmin' => 'ମନ୍ତବ୍ୟ ଅଧିକାରୀଗଣ',
	'right-comment' => 'ମନ୍ତବ୍ୟ ଦାଖଲ କରିବେ',
);

/** Polish (polski)
 * @author Odie2
 */
$messages['pl'] = array(
	'comments-comment' => 'Komentarz',
	'comments-desc' => 'Dodaje parser <code>&lt;comments&gt;</code> (komentarzy), który umożliwia komentowanie na stronach',
	'comments-db-locked' => '<h3>Dodawanie komentarzy</h3>Baza danych jest zablokowana z powodu rutynowej konserwacji. Prosimy spróbować ponownie później!',
	'comments-voted-label' => 'Zagłosowało',
	'comments-loading' => 'Ładowanie...',
	'comments-auto-refresher-enable' => 'Włącz automatyczne korygowanie komentarzy',
	'comments-auto-refresher-pause' => 'Wstrzymaj automatyczne korygowanie komentarzy',
	'comments-reply-to' => 'Odpowiedź',
	'comments-cancel-reply' => 'Anuluj',
	'comments-block-warning-anon' => 'Naprawdę chcesz ciągle ignorować komentarze od tego anonimowego użytkownika (adres IP)?',
	'comments-block-warning-user' => 'Naprawdę chcesz ciągle ignorować wszystkie komentarze od użytkownika $1?',
	'comments-delete-warning' => 'Czy na pewno chcesz usunąć ten komentarz?',
	'comments-sort-by-date' => 'Sortuj według daty',
	'comments-sort-by-score' => 'Sortuj według wyników',
	'comments-show-comment-link' => 'Pokaż komentarz',
	'comments-manage-blocklist-link' => 'Zarządzaj listą ignorowanych',
	'comments-ignore-message' => 'Ignorujesz autora tego komentarza',
	'comments-you' => 'Ty',
	'comments-reply' => 'Odpowiedź',
	'comments-login-required' => 'Musisz być zalogowany, aby dodać komentarz',
	'comments-not-allowed' => 'Nie możesz publikować komentarzy.',
	'comments-post' => 'Prześlij komentarz',
	'comments-submit' => 'Dodaj komentarz',
	'comments-score-text' => 'Wynik',
	'comments-permalink' => 'Stałe łącze',
	'comments-delete-link' => 'Usuń komentarz',
	'comments-anon-name' => 'Anonim',
	'comments-anon-message' => '{{SITENAME}} przyjmuje z zadowoleniem <b>wszystkie komentarze</b>. Jeśli nie chcesz być anonimowy, <a href="$1">zarejestruj się</a> lub <a href="$2">zaloguj</a>.',
	'comments-ignore-item' => '<a href="$1">$2</a>, na $3 <a href="$4">(odblokuj)</a>',
	'comments-ignore-no-users' => 'Brak obecnie zablokowanych użytkowników.',
	'comments-ignore-remove-message' => 'Czy na pewno chcesz odblokować komentarze użytkownika <b>$1</b>?',
	'comments-ignore-unblock' => 'Odblokuj',
	'comments-ignore-cancel' => 'Anuluj',
	'comments-ignore-title' => 'Lista ignorowanych komentarzy',
	'commentignorelist' => 'Lista ignorowanych komentarzy',
	'comments-no-comments-of-day' => 'Dziś brak komentarzy.',
	'log-name-comments' => 'Dziennik komentarzy',
	'log-description-comments' => 'Jest to dziennik komentarzy.',
	'comments-time-ago' => '$1 temu',
	'comments-time-days' => '{{PLURAL:$1|dzień|$1 dni}}',
	'comments-time-hours' => '{{PLURAL:$1|godzina|$1 godzin}}',
	'comments-time-minutes' => '{{PLURAL:$1|minuta|$1 minut}}',
	'comments-time-seconds' => '{{PLURAL:$1|sekunda|$1 sekund}}',
	'log-show-hide-comments' => '$1 dziennik komentarzu',
	'group-commentadmin' => 'Komentarz administratorów',
	'group-commentadmin-member' => '{{GENDER:$1|komentarz administratora}}',
	'grouppage-commentadmin' => '{{ns:project}}:Komentarz administratorów',
	'right-comment' => 'Zgłoś komentarze',
	'right-commentadmin' => 'Administrowanie wysłanych komentarzy użytkownika',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'comments-comment' => 'Coment',
	'comments-desc' => "A gionta un prinsipi d'anàlisi <code>&lt;comments&gt;</code> ch'a përmet ëd comenté le pàgine",
	'comments-db-locked' => "<h3>Gionté dij coment</h3>La base ëd dàit a l'é al moment blocà për manutension ordinaria dla base ëd dàit, ma apress a tornerà a la normalità. Për piasì, ch'a ven-a torna pi tard!",
	'comments-voted-label' => 'Votà',
	'comments-loading' => 'A caria ...',
	'comments-auto-refresher-enable' => 'Ativé àuto-agiornament dij coment',
	'comments-auto-refresher-pause' => "Fermé l'agiornament automàtich dij coment",
	'comments-reply-to' => 'Rësponde a',
	'comments-cancel-reply' => 'Scancela',
	'comments-block-warning-anon' => "É-lo sigur ëd vorèj ignoré përmanentement tùit ij coment dë st'utent anònim (a travers soa adrëssa IP)?",
	'comments-block-warning-user' => "Ses-to sigur ëd vorèj ignoré përmanentement tùit ij coment da l'utent $1?",
	'comments-delete-warning' => 'É-lo sicur ëd vorèj scancelé sto coment-sì?',
	'comments-sort-by-date' => 'Ordiné për data',
	'comments-sort-by-score' => 'Ordiné për valutassion',
	'comments-show-comment-link' => 'Vëdde coment',
	'comments-manage-blocklist-link' => 'Gestì lista da ignoré',
	'comments-ignore-message' => "A-j dà nen da ment a l'autor d'ës coment",
	'comments-you' => 'Ti',
	'comments-reply' => 'Rësponde',
	'comments-login-required' => 'A dev esse intrà ant ël sistema për gionté dij coment',
	'comments-not-allowed' => "A l'ha nen ël drit dë scrive dij coment.",
	'comments-post' => "Coment a l'artìcol",
	'comments-submit' => 'Gionta tò coment',
	'comments-score-text' => 'Pontegi',
	'comments-permalink' => 'Colegament përmanent',
	'comments-delete-link' => 'Scancelé ël coment',
	'comments-anon-name' => 'Utent anònim',
	'comments-anon-message' => '{{SITENAME}} a aceta <b>tùit ij coment</b>. Se chiel a veul nen esse anònim, ch\'as <a href="$1">argistra</a> o ch\'a <a href="$2">intra ant ël sistema</a>. A l\'é a gràtis.',
	'comments-ignore-item' => '<a href="$1">$2</a> dzor $3 <a href="$4">(dësblòca)</a>',
	'comments-ignore-no-users' => 'A-i é pa gnun utent blocà al moment.',
	'comments-ignore-remove-message' => "Ses-to sigur ëd vorèj dësbloché ij coment ëd l'utent <b>$1</b>?",
	'comments-ignore-unblock' => 'Dësbloché',
	'comments-ignore-cancel' => 'Scancela',
	'comments-ignore-title' => 'Lista dij coment ignorà',
	'commentignorelist' => 'Lista dij coment ignorà',
	'comments-no-comments-of-day' => 'A-i é pa gnun coment ëd la giornà.',
	'log-name-comments' => 'Registr dij coment',
	'log-description-comments' => "Cost-sì a l'é un registr dij coment.",
	'comments-time-ago' => '$1 fa',
	'comments-time-days' => '{{PLURAL:$1|un di|$1 di}}',
	'comments-time-hours' => "{{PLURAL:$1|n'ora|$1 ore}}",
	'comments-time-minutes' => '{{PLURAL:$1|na minuta|$1 minute}}',
	'comments-time-seconds' => '{{PLURAL:$1|un second|$1 second}}',
	'log-show-hide-comments' => '$1 registr dij coment',
	'group-commentadmin' => 'Aministrator dij Coment',
	'group-commentadmin-member' => '{{GENDER:$1|aministrator dij coment}}',
	'grouppage-commentadmin' => '{{ns:project}}:Aministrator dij Coment',
	'right-comment' => 'Publiché ij coment',
	'right-commentadmin' => "Aministré ij coment mandà da j'utent",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'comments-comment' => 'تبصره',
	'comments-loading' => 'برسېرېدنې کې دی...',
	'comments-cancel-reply' => 'ناگارل',
	'comments-sort-by-date' => 'اوډنه د نېټې له مخې',
	'comments-sort-by-score' => 'اوډنه د شمېرو له مخې',
	'comments-show-comment-link' => 'تبصره ښکاره کول',
	'comments-you' => 'تاسې',
	'comments-reply' => 'ځوابول',
	'comments-submit' => 'خپله تبصره ورگډول',
	'comments-delete-link' => 'تبصره ړنگول',
	'comments-anon-name' => 'ورکنومی کارن',
	'comments-ignore-unblock' => 'بنديز لرې کول',
	'comments-ignore-cancel' => 'ناگارل',
	'log-name-comments' => 'د تبصرو يادښت',
	'comments-time-ago' => '$1 دمخه',
	'comments-time-days' => '{{PLURAL:$1|يو ورځ|$1 ورځې}}',
	'comments-time-hours' => '{{PLURAL:$1|يو ساعت|$1 ساعتونه}}',
	'comments-time-minutes' => '{{PLURAL:$1|يو دقيقه|$1 دقيقې}}',
	'comments-time-seconds' => '{{PLURAL:$1|يوه ثانيه|$1 ثانيې}}',
	'right-comment' => 'تبصرې سپارل',
);

/** Portuguese (português)
 * @author Luckas
 */
$messages['pt'] = array(
	'comments-cancel-reply' => 'Cancelar',
	'comments-ignore-cancel' => 'Cancelar',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 */
$messages['pt-br'] = array(
	'comments-loading' => 'Carregando...',
	'comments-reply-to' => 'Responder a',
	'comments-cancel-reply' => 'Cancelar',
	'comments-delete-warning' => 'Você tem certeza que deseja excluir este comentário?',
	'comments-sort-by-date' => 'Ordenar por data',
	'comments-sort-by-score' => 'Ordenar por pontuação',
	'comments-show-comment-link' => 'Mostrar comentário',
	'comments-you' => 'Você',
	'comments-reply' => 'Responder',
	'comments-login-required' => 'Você precisa estar autenticado para adicionar comentários',
	'comments-not-allowed' => 'Você não tem permissão para postar comentários.',
	'comments-post' => 'Postar comentário',
	'comments-submit' => 'Adicionar seu comentário',
	'comments-score-text' => 'Pontuação',
	'comments-permalink' => 'Link permanente',
	'comments-delete-link' => 'Apagar comentário',
	'comments-anon-name' => 'Usuário anônimo',
	'comments-ignore-no-users' => 'Não há usuários atualmente bloqueados.',
	'comments-ignore-remove-message' => 'Você tem certeza que deseja desbloquear os comentários do usuário <b>$1</b>?',
	'comments-ignore-unblock' => 'Desbloquear',
	'comments-ignore-cancel' => 'Cancelar',
	'comments-ignore-title' => 'Lista de comentários ignorados',
	'commentignorelist' => 'Lista de comentários ignorados',
	'log-name-comments' => 'Registro de comentários',
	'log-description-comments' => 'Este é um registro de comentários.',
	'comments-time-days' => '{{PLURAL:$1|um dia|$1 dias}}',
	'comments-time-hours' => '{{PLURAL:$1|uma hora|$1 horas}}',
	'comments-time-minutes' => '{{PLURAL:$1|um minuto|$1 minutos}}',
	'comments-time-seconds' => '{{PLURAL:$1|um segundo|$1 segundos}}',
	'right-comment' => 'Enviar comentários',
);

/** Romanian (română)
 * @author Firilacroco
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'comments-comment' => 'Comentariu',
	'comments-voted-label' => 'Votat',
	'comments-loading' => 'Se încarcă...',
	'comments-reply-to' => 'Răspundeți utilizatorului',
	'comments-cancel-reply' => 'Revocare',
	'comments-sort-by-date' => 'Sortare după dată',
	'comments-sort-by-score' => 'Sortare după scor',
	'comments-show-comment-link' => 'Arată comentariul',
	'comments-manage-blocklist-link' => 'Administrează lista de ignorare',
	'comments-ignore-message' => 'Autorul acestui comentariu este ignorat de către dv.',
	'comments-you' => 'Dumneavoastră',
	'comments-reply' => 'Răspunde',
	'comments-login-required' => 'Trebuie să fiți autentificat pentru a adăuga comentarii',
	'comments-not-allowed' => 'Nu sunteți autorizat să publicați comentarii.',
	'comments-post' => 'Postează comentariul',
	'comments-submit' => 'Adăugați comentariul dumneavoastră',
	'comments-score-text' => 'Scor',
	'comments-permalink' => 'Legătură permanentă',
	'comments-delete-link' => 'Ștergere comentariul',
	'comments-anon-name' => 'Utilizator anonim',
	'comments-ignore-no-users' => 'Nu există utilizatori blocați.',
	'comments-ignore-unblock' => 'Deblocare',
	'comments-ignore-cancel' => 'Renunță',
	'comments-no-comments-of-day' => 'Nu există niciun comentariu al zilei.',
	'log-name-comments' => 'Jurnal comentarii',
	'log-description-comments' => 'Acesta este un jurnal de comentarii.',
	'comments-time-ago' => 'în urmă cu $1',
	'comments-time-days' => '{{PLURAL:$1|o zi|$1 zile}}',
	'comments-time-hours' => '{{PLURAL:$1|o oră|$1 ore}}',
	'comments-time-minutes' => '{{PLURAL:$1|un minut|$1 minute}}',
	'comments-time-seconds' => '{{PLURAL:$1|o secundă|$1 secunde}}',
	'log-show-hide-comments' => '$1 jurnalul de comentarii',
	'group-commentadmin' => 'Administratori de comentarii',
	'right-comment' => 'Trimite comentarii',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'comments-comment' => 'Commende',
	'comments-desc' => 'Aggiunge <code>&lt;comments&gt;</code> cumme gance analizzatrice ca permette de commendà sus a le pàggene',
	'comments-db-locked' => "<h3>Aggiunde de commende</h3>'U database jè bloccate pe mò pe manutenzione, apprisse ca spicce torne normale. Pe piacere pruève cchiù tarde!",
	'comments-voted-label' => 'Vutate',
	'comments-loading' => 'Stoche a careche…',
	'comments-auto-refresher-enable' => "Abbilite l'aggiornamende automateche de le commende",
	'comments-auto-refresher-pause' => "Firme l'aggiornamende automateche de le commende",
	'comments-reply-to' => 'Respunne a',
	'comments-cancel-reply' => 'Annulle',
	'comments-block-warning-anon' => "Sì secure ca non ge vuè ccu pinze a le commende pe sembre da stu utende anonime (ausanne l'indirizze IP sue)?",
	'comments-block-warning-user' => "Sì secure ca non ge vuè ccu pinze a le commende pe sembre da l'utende $1?",
	'comments-delete-warning' => 'Sì secure ca vuè ccu scangille stu commende?',
	'comments-sort-by-date' => 'Ordine pe date',
	'comments-sort-by-score' => 'Ordine pe pundegge',
	'comments-show-comment-link' => "Fà vedè 'u commende",
	'comments-manage-blocklist-link' => "Gestisce l'elenghe de le crestiane da cacà",
	'comments-ignore-message' => "Tu ste cache l'autore de stu commende",
	'comments-you' => 'Tu',
	'comments-reply' => 'Respunne',
	'comments-login-required' => 'Tu à trasè pe aggiungere commende',
	'comments-not-allowed' => 'Non ge sì abbilitate a mannà commende.',
	'comments-post' => "Mitte 'nu commende",
	'comments-submit' => "Aggiunge 'u commende tune",
	'comments-score-text' => 'Pundegge',
	'comments-permalink' => 'Collegamende permanende',
	'comments-delete-link' => "Scangille 'u commende",
	'comments-anon-name' => 'Utende anonime',
	'comments-anon-message' => '{{SITENAME}} bovègne a <b>tutte le commende</b>. Ce tu non ge vuè essere anonime, <a href="$1">reggistrate</a> o <a href="$2">tràse</a>. Jè libbere.',
	'comments-ignore-item' => '<a href="$1">$2</a> a le $3 <a href="$4">(sblocche)</a>',
	'comments-ignore-no-users' => 'Non ge stonne utinde bloccate pe mò.',
	'comments-ignore-remove-message' => "Sì secure ca vuè ccu sblocche le commende de l'utende <b>$1</b>?",
	'comments-ignore-unblock' => 'Sblocche',
	'comments-ignore-cancel' => 'Annulle',
	'comments-ignore-title' => "Commende l'elenghe de scarte",
	'commentignorelist' => "Commende l'elenghe de scarte",
	'comments-no-comments-of-day' => "Non ge stonne commende d'a sciurnate.",
	'log-name-comments' => 'Archivije de le commende',
	'log-description-comments' => "Quiste jè 'n'archivije de commende.",
	'logentry-comments-add' => "$1 ave mannate 'nu commende nuève sus a $3",
	'logentry-comments-delete' => "$1 ave scangellate 'u commende #$4 sus a $3",
	'comments-time-ago' => '$1 fà',
	'comments-time-days' => "{{PLURAL: $1|'nu sciurne|$1 sciurne}}",
	'comments-time-hours' => "{{PLURAL: $1|'n'ore|$1 ore}}",
	'comments-time-minutes' => "{{PLURAL:$1|'nu minute|$1 minute}}",
	'comments-time-seconds' => "{{PLURAL:$1|'nu seconde|$1 seconde}}",
	'log-show-hide-comments' => '$1 archivije de commende',
	'group-commentadmin' => 'Amministrature de le Commende',
	'group-commentadmin-member' => "{{GENDER:$1|amministratore d'u commende}}",
	'grouppage-commentadmin' => "{{ns:project}}:Amministrature d'u commende",
	'right-comment' => 'Conferme le commende',
	'right-commentadmin' => 'Gestisce le commende de le utinde confermate',
);

/** Russian (русский)
 * @author Kaganer
 * @author Okras
 * @author Ole Yves
 * @author SimonLitt
 */
$messages['ru'] = array(
	'comments-comment' => 'Комментарий',
	'comments-desc' => 'Добавляет перехватчик синтаксического анализатора <code>&lt;comments&gt;</code>, который позволяет комментировать страницы',
	'comments-db-locked' => '<h3>Добавление комментариев</h3>В настоящее время база данных заблокирована для планового обслуживания баз данных, после чего она вернётся в нормальное состояние. Пожалуйста, попробуйте позже!',
	'comments-voted-label' => 'Проголосовал',
	'comments-loading' => 'Загрузка...',
	'comments-auto-refresher-enable' => 'Включить автоматическое обновление комментариев',
	'comments-auto-refresher-pause' => 'Остановить автоматическое обновление комментариев',
	'comments-reply-to' => 'Ответить',
	'comments-cancel-reply' => 'Отменить',
	'comments-block-warning-anon' => 'Вы уверены, что хотите постоянно игнорировать все комментарии, поступающие от этого анонимного участника (через его IP-адрес)?',
	'comments-block-warning-user' => 'Вы уверены, что хотите постоянно игнорировать все комментарии от участника $1?',
	'comments-delete-warning' => 'Вы уверены, что хотите удалить данный комментарий?',
	'comments-sort-by-date' => 'Упорядочить по дате',
	'comments-sort-by-score' => 'Упорядочить по числу баллов',
	'comments-show-comment-link' => 'Показать комментарий',
	'comments-manage-blocklist-link' => 'Управление списком игнорируемых',
	'comments-ignore-message' => 'Вы игнорируете автора этого комментария',
	'comments-you' => 'Вы',
	'comments-reply' => 'Ответить',
	'comments-login-required' => 'Для добавления комментариев вы должны авторизоваться.',
	'comments-not-allowed' => 'Вы не можете оставлять комментарии.',
	'comments-post' => 'Оставить комментарий',
	'comments-submit' => 'Добавить свой комментарий',
	'comments-score-text' => 'Оценка',
	'comments-permalink' => 'Постоянная ссылка',
	'comments-delete-link' => 'Удалить комментарий',
	'comments-anon-name' => 'Анонимный участник',
	'comments-anon-message' => 'На сайте {{SITENAME}} приветствуются <b>все комментарии</b>. Если вы не хотите быть анонимным, <a href="$1">зарегистрируйтесь</a> или <a href="$2">представьтесь</a>. Это бесплатно.',
	'comments-links-are-forbidden' => 'Внешние ссылки в комментариях запрещены!',
	'comments-is-spam' => 'Представленный текст комментария был воспринят как спам.',
	'comments-ignore-item' => '<a href="$1">$2</a> на $3 <a href="$4">(разблокировать)</a>',
	'comments-ignore-no-users' => 'В настоящее время нет ни одного заблокированного участника.',
	'comments-ignore-remove-message' => 'Вы уверены, что хотите разблокировать комментарии участника <b>$1</b>?',
	'comments-ignore-unblock' => 'Разблокировать',
	'comments-ignore-cancel' => 'Отменить',
	'comments-ignore-title' => 'Список тех, чьи комментарии игнорируются',
	'commentignorelist' => 'Список игнорируемых комментаторов',
	'comments-no-comments-of-day' => 'Нет комментариев дня.',
	'log-name-comments' => 'Журнал комментариев',
	'log-description-comments' => 'Это журнал комментариев.',
	'logentry-comments-add' => '$1 опубликовал новый комментарий на $3',
	'logentry-comments-delete' => '$1 удалил комментарий #$4 на $3',
	'comments-time-ago' => '$1 назад',
	'comments-time-days' => '{{PLURAL:$1|$1 день|$1 дня|$1 дней}}',
	'comments-time-hours' => '{{PLURAL:$1|$1 час|$1 часа|$1 часов}}',
	'comments-time-minutes' => '{{PLURAL:$1|$1 минуту|$1 минуты|$1 минут}}',
	'comments-time-seconds' => '{{PLURAL:$1|$1 секунду|$1 секунды|$1 секунд}}',
	'log-show-hide-comments' => '$1 комментарий из журнала',
	'group-commentadmin' => 'Модераторы комментариев',
	'group-commentadmin-member' => '{{GENDER:$1|модератор комментариев}}',
	'grouppage-commentadmin' => '{{ns:project}}:Модераторы комментариев',
	'right-comment' => 'Отправить комментарии',
	'right-commentadmin' => 'Администрировать комментарии, опубликованные участником',
	'right-commentlinks' => 'Использовать внешние ссылки в комментариях',
);

/** Sinhala (සිංහල)
 * @author Singhalawap
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'comments-comment' => 'පරිකථනය',
	'comments-voted-label' => 'මනාපය දෙන ලදී',
	'comments-loading' => 'ප්‍රවේශනය වෙමින් පවතී...',
	'comments-auto-refresher-enable' => 'පරිකථන ස්වයං-නවමුව සක්‍රිය කරන්න',
	'comments-auto-refresher-pause' => 'පරිකථන ස්වයං-නවමුව විරාම කරන්න',
	'comments-reply-to' => 'පිළිතුරු දෙන්න',
	'comments-cancel-reply' => 'අත් හරින්න',
	'comments-delete-warning' => 'ඔබට මෙම පරිකථනය මැකීමට අවශ්‍යමද?',
	'comments-sort-by-date' => 'දිනය අනුව පෙළගස්වන්න',
	'comments-sort-by-score' => 'ලකුණ අනුව පෙළගස්වන්න',
	'comments-show-comment-link' => 'පරිකථනය පෙන්වන්න',
	'comments-manage-blocklist-link' => 'නොසලකා හැරීම් ලැයිස්තුව කළමනාකරණය කරන්න',
	'comments-ignore-message' => 'ඔබ මෙම පරිකථනයේ කතෘ නොසලකා හරිමින් සිටියි',
	'comments-you' => 'ඔබ',
	'comments-reply' => 'පිළිතුරු දෙන්න',
	'comments-login-required' => 'පරිකථන එක් කිරීම සඳහා ඔබ ප්‍රවිෂ්ට වී සිටිය යුතුය',
	'comments-not-allowed' => 'ඔබට පරිකථන තැපැල් කිරීමට ඉඩ ලබා නොදේ.',
	'comments-post' => 'පරිකථනය තැපැල් කරන්න',
	'comments-submit' => 'ඔබේ පරිකථනය එක් කරන්න',
	'comments-score-text' => 'ලකුණ',
	'comments-permalink' => 'නිත්‍යසබැඳිය',
	'comments-delete-link' => 'පරිකථනය මකන්න',
	'comments-anon-name' => 'නිර්නාමික පරිශීලක',
	'comments-ignore-item' => '<a href="$1">$2</a> මත $3 <a href="$4">(ආවාරණය)</a>',
	'comments-ignore-no-users' => 'දැනට වාරණය කරන ලද පරිශීලකයන් නොමැත.',
	'comments-ignore-unblock' => 'වාරණය ඉවත්කරන්න',
	'comments-ignore-cancel' => 'අත් හරින්න',
	'comments-ignore-title' => 'පරිකථන නොසලකා හැරීම් ලැයිස්තුව',
	'commentignorelist' => 'පරිකථන නොසලකා හැරීම් ලැයිස්තුව',
	'comments-no-comments-of-day' => 'දවසේ පරිකථන කිසිවක් එහි නොමැත.',
	'log-name-comments' => 'පරිකථන ලඝු සටහන',
	'log-description-comments' => 'මෙය පරිකථනවල ලඝු සටහනකි.',
	'comments-time-ago' => '$1 පෙර',
	'comments-time-days' => '{{PLURAL:$1|දවසක්|දවස් $1}}',
	'comments-time-hours' => '{{PLURAL:$1|පැයක්|පැය $1}}',
	'comments-time-minutes' => '{{PLURAL:$1|මිනිත්තුවක්|මිනිත්තු $1}}',
	'comments-time-seconds' => '{{PLURAL:$1|තත්පරයක්|තත්පර $1}}',
	'log-show-hide-comments' => '$1 පරිකථන සටහන',
	'group-commentadmin' => 'පරිකථන පරිපාලකවරු',
	'group-commentadmin-member' => '{{GENDER:$1|පරිකථන පරිපාලක}}',
	'grouppage-commentadmin' => '{{ns:project}}:පරිකථන පරිපාලකවරු',
	'right-comment' => 'පරිකථන යොමන්න',
	'right-commentadmin' => 'පරිශීලක-යොමන ලද පරිකථන පාලනය කරන්න',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'comments-comment' => 'Коментар',
	'comments-voted-label' => 'Гласано',
	'comments-loading' => 'Учитавам…',
	'comments-auto-refresher-enable' => 'Омогући самоосвежавање коментара',
	'comments-auto-refresher-pause' => 'Онемогући самоосвежавање коментара',
	'comments-reply-to' => 'Одговори на',
	'comments-cancel-reply' => 'Откажи',
	'comments-block-warning-user' => 'Желите ли да трајно занемарите све коментаре корисника $1?',
	'comments-delete-warning' => 'Желите ли да обришете овај коментар?',
	'comments-sort-by-date' => 'Поређај по датуму',
	'comments-sort-by-score' => 'Поређај по бодовима',
	'comments-show-comment-link' => 'Прикажи коментар',
	'comments-manage-blocklist-link' => 'Управљај списком занемарених',
	'comments-ignore-message' => 'Занемарујете аутора овог коментара',
	'comments-ignore-unblock' => 'Деблокирај',
	'comments-ignore-cancel' => 'Откажи',
	'comments-ignore-title' => 'Списак занемарених коментара',
	'commentignorelist' => 'Списак занемарених коментара',
	'comments-no-comments-of-day' => 'Нема коментара дана.',
	'log-name-comments' => 'Дневник коментара',
	'log-description-comments' => 'Ово је дневник коментара.',
	'comments-time-ago' => 'пре $1',
	'comments-time-days' => '{{PLURAL:$1|један дан|$1 дана|$1 дана}}', # Fuzzy
	'comments-time-hours' => '{{PLURAL:$1|један сат|$1 сата|$1 сати}}', # Fuzzy
	'comments-time-minutes' => '{{PLURAL:$1|један минут|$1 минута|$1 минута}}', # Fuzzy
	'comments-time-seconds' => '{{PLURAL:$1|један секунд|$1 секунде|$1 секунди}}', # Fuzzy
	'log-show-hide-comments' => '$1 дневник коментара',
	'group-commentadmin' => 'Администратори коментара',
	'group-commentadmin-member' => '{{GENDER:$1|администратор|администраторка|администратор}} коментара',
	'grouppage-commentadmin' => '{{ns:project}}:Администратори коментара',
	'right-comment' => 'слање коментара',
	'right-commentadmin' => 'управљање корисничким коментарима',
);

/** Swedish (svenska)
 * @author Jopparn
 * @author Tobulos1
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'comments-comment' => 'Kommentar',
	'comments-desc' => 'Lägger till parserkroken <code>&lt;comments&gt;</code> som tillåter kommentarer på sidor',
	'comments-db-locked' => '<h3>Lägga till kommentarer</h3>Databasen är för tillfället låst för rutinerat underhåll, och kommer att fungera normalt när det är klart. Var god kom tillbaka senare!',
	'comments-voted-label' => 'Röstade',
	'comments-loading' => 'Läser in...',
	'comments-auto-refresher-enable' => 'Aktivera autouppdatering av kommentar',
	'comments-auto-refresher-pause' => 'Pausa autouppdatering av kommentarer',
	'comments-reply-to' => 'Besvara',
	'comments-cancel-reply' => 'Avbryt',
	'comments-block-warning-anon' => 'Är du säker på att du vill ignorera alla kommentarer från denna anonyma användare permanent (via dess IP-adress)?',
	'comments-block-warning-user' => 'Är du säker på att du vill ignorera alla kommentarer från användaren $1?',
	'comments-delete-warning' => 'Är du säker på att du vill radera denna kommentar?',
	'comments-sort-by-date' => 'Sortera efter datum',
	'comments-sort-by-score' => 'Sortera efter poäng',
	'comments-show-comment-link' => 'Visa kommentar',
	'comments-manage-blocklist-link' => 'Hantera ignoreringslista',
	'comments-ignore-message' => 'Du ignorerar författaren till denna kommentar',
	'comments-you' => 'Du',
	'comments-reply' => 'Svara',
	'comments-login-required' => 'Du måste vara inloggad för att lägga till kommentarer',
	'comments-not-allowed' => 'Du får inte posta kommentarer.',
	'comments-post' => 'Skicka kommentar',
	'comments-submit' => 'Lägg till din kommentar',
	'comments-score-text' => 'Poäng',
	'comments-permalink' => 'Permanent länk',
	'comments-delete-link' => 'Radera kommentar',
	'comments-anon-name' => 'Anonym användare',
	'comments-anon-message' => '{{SITENAME}} välkomnar <b>alla kommentarer</b>. Om du inte vill vara anonym kan du <a href="$1">registrera</a> eller <a href="$2">logga in</a>. Det är gratis.',
	'comments-ignore-item' => '<a href="$1">$2</a> den $3 <a href="$4">(ta bort blockering)</a>',
	'comments-ignore-no-users' => 'Det finns inga användare som är blockerade för tillfället.',
	'comments-ignore-remove-message' => 'Är du säker på att du vill ta bort blockeringen för användaren <b>$1</b>s kommentarer?',
	'comments-ignore-unblock' => 'Ta bort blockering',
	'comments-ignore-cancel' => 'Avbryt',
	'comments-ignore-title' => 'Ignoreringslista för kommentarer',
	'commentignorelist' => 'Ignoreringslista för kommentarer',
	'comments-no-comments-of-day' => 'Det finns inga kommentarer idag.',
	'log-name-comments' => 'Kommentarlogg',
	'log-description-comments' => 'Detta är en logg för kommentarer.',
	'logentry-comments-add' => '$1 har postat en ny kommentar på $3',
	'logentry-comments-delete' => '$1 borttagen kommentar #$4 på $3',
	'comments-time-ago' => '$1 sedan',
	'comments-time-days' => '{{PLURAL:$1|en dag|$1 dagar}}',
	'comments-time-hours' => '{{PLURAL:$1|en timme|$1 timmar}}',
	'comments-time-minutes' => '{{PLURAL:$1|en minut|$1 minuter}}',
	'comments-time-seconds' => '{{PLURAL:$1|en sekund|$1 sekunder}}',
	'log-show-hide-comments' => '$1 kommentarlogg',
	'group-commentadmin' => 'Kommentaradministratörer',
	'group-commentadmin-member' => '{{GENDER:$1|kommentaradministratör}}',
	'grouppage-commentadmin' => '{{ns:project}}:Kommentaradministratörer',
	'right-comment' => 'Skicka kommentarer',
	'right-commentadmin' => 'Administrera kommentarer som användare har skickat',
	'right-commentlinks' => 'Använd externa länkar i kommentarer',
);

/** Swahili (Kiswahili)
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'comments-loading' => 'Inapakiwa...',
	'comments-you' => 'Wewe',
	'comments-reply' => 'Jibu',
	'comments-post' => 'Chapisha maoni',
	'comments-submit' => 'Ongeza maoni yako',
	'comments-delete-link' => 'Futa maoni',
	'comments-ignore-cancel' => 'Ghairi',
	'log-name-comments' => 'Kumbukumbu ya maoni',
);

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'comments-comment' => 'கருத்து',
	'comments-voted-label' => 'வாக்களிக்கப்பட்டது',
	'comments-loading' => 'ஏற்றப்படுகிறது...',
	'comments-cancel-reply' => 'ரத்து செய்',
	'comments-sort-by-date' => 'தேதியைப பொறுத்து வரிசைப்படுத்து',
	'comments-show-comment-link' => 'கருத்தை காட்டு',
	'comments-you' => 'தாங்கள்',
	'comments-reply' => 'பதில் அளி',
	'comments-login-required' => 'கருத்துக்களை சேர்க்க நீங்கள் புகுபதிகை செய்ய வேண்டும்',
	'comments-not-allowed' => 'கருத்துகளை பதிவு செய்ய நீங்கள் அனுமதிக்கப்படவில்லை.',
	'comments-post' => 'கருத்துக்களை பதியவும்',
	'comments-submit' => 'உங்கள் கருத்தை சேர்க்கவும்',
	'comments-score-text' => 'பெறுபுள்ளி',
	'comments-permalink' => 'நிரந்தர இணைப்பு',
	'comments-delete-link' => 'கருத்தை நீக்கவும்',
	'comments-anon-name' => 'அடையாளம் காட்டாத பயனர்',
	'comments-ignore-no-users' => 'தற்போது தடை செய்யப்பட பயனர்கள் யாரும் இல்லை.',
	'comments-ignore-remove-message' => 'நீங்கள் உறுதியாக <b>$1</b>-ன் கருத்துக்களை தடை நீக்க விரும்புகிறீர்களா?',
	'comments-ignore-unblock' => 'தடை நீக்கு',
	'comments-ignore-cancel' => 'ரத்து செய்',
	'comments-ignore-title' => 'கருத்து புறக்கணிப்பு பட்டியல்',
	'commentignorelist' => 'கருத்து புறக்கணிப்பு பட்டியல்',
	'log-name-comments' => 'கருத்துகள் பதிகை',
	'log-description-comments' => 'இது கருத்துகளின் பதிகை ஆகும்.',
	'comments-time-ago' => '$1 முன்பு',
	'comments-time-days' => '{{PLURAL:$1|ஒரு நாள்|$1 நாட்கள்}}',
	'comments-time-hours' => '{{PLURAL:$1|ஒரு மணி|$1 மணிகள்}}',
	'comments-time-minutes' => '{{PLURAL:$1|ஒரு நிமிடம்|$1 நிமிடங்கள்}}',
	'comments-time-seconds' => '{{PLURAL:$1|ஒரு வினாடி|$1 வினாடிகள்}}',
	'log-show-hide-comments' => '$1 கருத்து பதிகை',
	'group-commentadmin' => 'கருத்து நிர்வாகிகள்',
	'group-commentadmin-member' => '{{GENDER:$1|கருத்து நிர்வாகி}}',
	'grouppage-commentadmin' => '{{ns:project}}:கருத்து நிர்வாகிகள்',
	'right-comment' => 'கருத்துகளை அனுப்பவும்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'comments-comment' => 'వ్యాఖ్య',
	'comments-cancel-reply' => 'రద్దుచేయి',
	'comments-show-comment-link' => 'వ్యాఖ్యను చూపించు',
	'comments-you' => ' మీరు',
	'comments-reply' => 'స్పందించండి',
	'comments-login-required' => 'వ్యాఖ్యలను చేర్చడానికి మీరు ప్రవేశించి ఉండాలి',
	'comments-not-allowed' => 'వ్యాఖ్యానించే అనుమతి మీకు లేదు.',
	'comments-submit' => 'మీ వ్యాఖ్యను చేర్చండి',
	'comments-permalink' => 'స్థిరలంకె',
	'comments-delete-link' => 'వ్యాఖ్యను తొలగించు',
	'comments-anon-name' => 'అజ్ఞాత వాడుకరి',
	'comments-ignore-cancel' => 'రద్దుచేయి',
	'log-name-comments' => 'వ్యాఖ్యల చిట్టా',
	'log-description-comments' => 'ఇది వ్యాఖ్యల యొక్క చిట్టా.',
	'comments-time-ago' => '$1 క్రితం',
	'comments-time-days' => '{{PLURAL:$1|ఒక రోజు|$1 రోజుల}}',
	'comments-time-hours' => '{{PLURAL:$1|ఒక గంట|$1 గంటల}}',
	'comments-time-minutes' => '{{PLURAL:$1|ఒక నిమిషం|$1 నిమిషాల}}',
	'comments-time-seconds' => '{{PLURAL:$1|$1 క్షణం|$1 క్షణాల}}',
	'log-show-hide-comments' => 'వ్యాఖ్యల చిట్టాను $1',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'comments-comment' => 'ⵜⴰⵏⵏⴰⵢⵜ',
	'comments-you' => 'ⴽⴻⵢⵢ',
	'comments-reply' => 'ⵔⴰⵔ',
	'comments-post' => 'ⵔⵏⵓ ⵜⴰⵏⵏⴰⵢⵜ',
	'comments-submit' => 'ⵔⵏⵓ ⵜⴰⵏⵏⴰⵢⵜ',
);

/** Ukrainian (українська)
 * @author Ahonc
 * @author Andriykopanytsia
 * @author Base
 * @author RLuts
 * @author Ата
 */
$messages['uk'] = array(
	'comments-comment' => 'Коментарі',
	'comments-desc' => 'Додає у парсер обробку <code>&lt;comments&gt;</code>, що вмикає підтримки коментування на сторінках',
	'comments-db-locked' => '<h3>Додавання коментування</h3>Базу даних наразі заблоковано для опрацювання, після якого вона повернеться у норму. Будь ласка, перевірте пізніше!',
	'comments-voted-label' => 'Проголосували',
	'comments-loading' => 'Завантаження…',
	'comments-auto-refresher-enable' => 'Увімкнути автоновлення коментарів',
	'comments-auto-refresher-pause' => 'Призупинити автооновлення коментарів',
	'comments-reply-to' => 'Відповісти',
	'comments-cancel-reply' => 'Скасувати',
	'comments-block-warning-anon' => 'Ви дійсно бажаєте постійно ігнорувати коментарі від цього анонімного користувача (за IP-адресою)?',
	'comments-block-warning-user' => 'Ви дісно хочете постійно ігнорувати усі коментарі {{GENDER:$1|користувача|користувачки}} $1?',
	'comments-delete-warning' => 'Ви дійсно бажаєте вилучити цей коментар?',
	'comments-sort-by-date' => 'Сортувати за датою',
	'comments-sort-by-score' => 'Сортувати за оцінками',
	'comments-show-comment-link' => 'Показати коментар',
	'comments-manage-blocklist-link' => 'Керувати списками ігнорування',
	'comments-ignore-message' => 'Ви ігноруєте автора цього коментраря',
	'comments-you' => 'Ви',
	'comments-reply' => 'Відповісти',
	'comments-login-required' => 'Ви повинні увійти до системи, щоб додавати коментарі',
	'comments-not-allowed' => 'Вам не дозволено надсилати коментарі.',
	'comments-post' => 'Надіслати коментар',
	'comments-submit' => 'Додати свій коментар',
	'comments-score-text' => 'Оцінка',
	'comments-permalink' => 'Постійне посилання',
	'comments-delete-link' => 'Вилучити коментар',
	'comments-anon-name' => 'Анонімний користувач',
	'comments-anon-message' => '{{SITENAME}} вітає <b>усі коментарі</b>. Якщо Ви не хочете бути анонімними, <a href="$1">зареєструйтесь</a> або <a href="$2">увійдіть</a>. Це безкоштовно.',
	'comments-links-are-forbidden' => 'Зовнішні посилання у коментарях - заборонені!',
	'comments-is-spam' => 'Поданий текст коментаря був сприйнятий як спам.',
	'comments-ignore-item' => '<a href="$1">$2</a>, заблоковано $3 <a href="$4">(розблокувати)</a>',
	'comments-ignore-no-users' => 'Користувачів, яких наразі заблоковано, немає.',
	'comments-ignore-remove-message' => 'Ви впевнені, що хочете розблокувати коментарі користувача <b>$1</b>?',
	'comments-ignore-unblock' => 'Розблокувати',
	'comments-ignore-cancel' => 'Скасувати',
	'comments-ignore-title' => 'Список коментарів, що ігноруються',
	'commentignorelist' => 'Список коментарів, що ігноруються',
	'comments-no-comments-of-day' => 'Сьогодні коментарів немає.',
	'log-name-comments' => 'Журнал коментарів',
	'log-description-comments' => 'Це журнал коментарів.',
	'logentry-comments-add' => '$1 {{GENDER:$1|додав|додала}} новий коментар на сторінку $3',
	'logentry-comments-delete' => '$1 видалив коментар #$4 на $3',
	'comments-time-ago' => '$1 тому',
	'comments-time-days' => '$1 {{PLURAL:$1|день|дні|днів}}',
	'comments-time-hours' => '$1 {{PLURAL:$1|годину|години|годин}}',
	'comments-time-minutes' => '$1 {{PLURAL:$1|хвилину|хвилини|хвилин}}',
	'comments-time-seconds' => '$1 {{PLURAL:$1|секунду|секунди|секунд}}',
	'log-show-hide-comments' => '$1 журнал коментарів',
	'group-commentadmin' => 'Адміністратор коментарів',
	'group-commentadmin-member' => '{{GENDER:$1|адміністратор коментарів|адміністраторка коментрарів}}',
	'grouppage-commentadmin' => '{{ns:project}}:Адміністратори коментарів',
	'right-comment' => 'робити коментарі',
	'right-commentadmin' => 'Адмініструвати надіслані користувачами коментарі',
	'right-commentlinks' => 'Вживати зовнішні посилання у коментарях',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Hydra
 * @author Hzy980512
 * @author Shirayuki
 * @author TianyinLee
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'comments-comment' => '评论',
	'comments-desc' => '增加<code>&lt;comments&gt;</code>解析器钩，允许在页面上发表评论',
	'comments-db-locked' => '<h3>添加评论</h3>数据库当前因正在进行日常维护而被锁定，过会它会恢复正常，请稍后再来。',
	'comments-voted-label' => '已投票',
	'comments-loading' => '载入中...',
	'comments-auto-refresher-enable' => '开启评论自动刷新',
	'comments-auto-refresher-pause' => '关闭评论自动刷新',
	'comments-reply-to' => '回复',
	'comments-cancel-reply' => '取消',
	'comments-block-warning-anon' => '您确定要永久忽略来自此IP地址的所有评论吗？',
	'comments-block-warning-user' => '您确定要永久忽略来自用户 $1 的所有评论吗？',
	'comments-delete-warning' => '您确定要删除此评论吗？',
	'comments-sort-by-date' => '按日期排序',
	'comments-sort-by-score' => '按分数排序',
	'comments-show-comment-link' => '显示评论',
	'comments-manage-blocklist-link' => '管理忽略列表',
	'comments-ignore-message' => '你忽略了来自这个人的评论',
	'comments-you' => '你',
	'comments-reply' => '回复',
	'comments-login-required' => '您必须登录才能添加评论',
	'comments-not-allowed' => '您未被允许发表评论。',
	'comments-post' => '发表评论',
	'comments-submit' => '添加你的评论',
	'comments-score-text' => '分数',
	'comments-permalink' => '永久链接',
	'comments-delete-link' => '删除评论',
	'comments-anon-name' => '匿名用户',
	'comments-anon-message' => '{{SITENAME}}欢迎<b>所有评论</b>。如果您不想匿名，<a href="$1">注册</a>或<a href="$2">登录</a>。它是免费的。',
	'comments-links-are-forbidden' => '评论中禁止外部链接！',
	'comments-is-spam' => '提交的评论文本像是垃圾信息。',
	'comments-ignore-item' => '<a href="$1">$2</a>于$3 <a href="$4">（解封）</a>',
	'comments-ignore-no-users' => '目前没有用户被屏蔽。',
	'comments-ignore-remove-message' => '您确定要解封<b>$1</b>的评论吗？',
	'comments-ignore-unblock' => '解封',
	'comments-ignore-cancel' => '取消',
	'comments-ignore-title' => '评论忽略名单',
	'commentignorelist' => '评论忽略名单',
	'comments-no-comments-of-day' => '今天没有新的评论。',
	'log-name-comments' => '评论日志',
	'log-description-comments' => '这是评论的日志。',
	'logentry-comments-add' => '$1在$3上添加了一则新评论',
	'logentry-comments-delete' => '$1删除了$3上的评论#$4',
	'comments-time-ago' => '$1前',
	'comments-time-days' => '{{PLURAL:$1|1天|$1天}}',
	'comments-time-hours' => '{{PLURAL:$1|1小时|$1小时}}',
	'comments-time-minutes' => '{{PLURAL:$1|1分钟|$1分钟}}',
	'comments-time-seconds' => '{{PLURAL:$1|1秒|$1秒}}',
	'log-show-hide-comments' => '$1评论日志',
	'group-commentadmin' => '评论管理员们',
	'group-commentadmin-member' => '{{GENDER:$1|评论管理员}}',
	'grouppage-commentadmin' => '{{ns:project}}:评论管理员',
	'right-comment' => '提交评论',
	'right-commentadmin' => '管理用户提交的评论',
	'right-commentlinks' => '评论中使用外部链接',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'comments-comment' => '評論',
	'comments-desc' => '添加容許於頁面上發表評論的<code>&lt;comments&gt;</code>解析器钩',
	'comments-db-locked' => '<h3>添加評論</h3>。伺服器目前因日常維護而鎖定，之後將恢復正常，請稍後再檢查。',
	'comments-voted-label' => '已投票',
	'comments-loading' => '載入中...',
	'comments-auto-refresher-enable' => '啟用自動更新評論',
	'comments-auto-refresher-pause' => '暫停自動更新評論',
	'comments-reply-to' => '回覆',
	'comments-cancel-reply' => '取消',
	'comments-block-warning-anon' => '你確定要按此匿名用戶的IP位址永久忽略其所有意見？',
	'comments-block-warning-user' => '你確定要永久忽略$1的所有意見？',
	'comments-delete-warning' => '你確定要刪除此評論？',
	'comments-sort-by-date' => '按日期排序',
	'comments-sort-by-score' => '按分數排序',
	'comments-show-comment-link' => '顯示評論',
	'comments-manage-blocklist-link' => '管理忽略清單',
	'comments-ignore-message' => '你正忽略此評論之作者',
	'comments-you' => '你',
	'comments-reply' => '回覆',
	'comments-login-required' => '您必須登入以添加評論。',
	'comments-not-allowed' => '你不可發表評論。',
	'comments-post' => '發表評論',
	'comments-submit' => '添加您的評論',
	'comments-score-text' => '分數',
	'comments-permalink' => '永久鏈接',
	'comments-delete-link' => '刪除評論',
	'comments-anon-name' => '匿名用戶',
	'comments-anon-message' => '{{SITENAME}} 歡迎<b>任何評論</b>。若你不希望匿名，免費<a href="$1">註冊</a>或<a href="$2">登入</a>。',
	'comments-ignore-item' => '<a href="$1">$2</a>於$3<a href="$4">（解封）</a>',
	'comments-ignore-no-users' => '目前沒有用戶遭隱藏。',
	'comments-ignore-remove-message' => '您確定要取消隱藏用戶<b>$1</b>的評論？',
	'comments-ignore-unblock' => '解封',
	'comments-ignore-cancel' => '取消',
	'comments-ignore-title' => '評論忽略清單',
	'commentignorelist' => '評論忽略清單',
	'comments-no-comments-of-day' => '是日沒有評論。',
	'log-name-comments' => '評論日誌',
	'log-description-comments' => '這是評論的日誌。',
	'comments-time-ago' => '$1前',
	'comments-time-days' => '$1天',
	'comments-time-hours' => '$1小時',
	'comments-time-minutes' => '$1分鍾',
	'comments-time-seconds' => '$1秒',
	'log-show-hide-comments' => '$1評論日誌',
	'group-commentadmin' => '評論管理員',
	'group-commentadmin-member' => '{{GENDER:$1|評論管理員}}',
	'grouppage-commentadmin' => '{{ns:project}}:評論管理員',
	'right-comment' => '提交評論',
	'right-commentadmin' => '管理用戶提交的評論',
);
