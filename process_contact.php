<?php
/** Contact handler: CSRF + honeypot + validation + sanitisation, then mail(). */
require __DIR__ . '/config/config.php';
function back($ok,$msg,$errors=[],$old=[]){ $_SESSION['flash']=compact('ok','msg','errors'); $_SESSION['old']=$old; header('Location: index.php#contact'); exit; }
if ($_SERVER['REQUEST_METHOD']!=='POST') back(false,'Please use the contact form.');
if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) back(false,'Session expired. Please try again.');
if (!empty($_POST['website'])) back(true,'Thanks, your message was received.'); // honeypot: silently drop bots
$clean = fn($v)=>trim(preg_replace('/[\r\n]+/',' ',strip_tags((string)$v)));
$d = ['name'=>$clean($_POST['name']??''),'email'=>$clean($_POST['email']??''),'subject'=>$clean($_POST['subject']??''),'message'=>trim(strip_tags((string)($_POST['message']??'')))];
$er=[];
if (mb_strlen($d['name'])<2) $er['name']='Enter your full name.';
if (!filter_var($d['email'],FILTER_VALIDATE_EMAIL)) $er['email']='Enter a valid email address.';
if (mb_strlen($d['subject'])<3) $er['subject']='Enter a subject (3+ characters).';
if (mb_strlen($d['message'])<10) $er['message']='Message must be at least 10 characters.';
if ($er) back(false,'Please fix the highlighted fields.',$er,$d);
$headers = ['From'=>$mail['from'],'Reply-To'=>$d['email'],'Content-Type'=>'text/plain; charset=UTF-8'];
$body = "Name: {$d['name']}\nEmail: {$d['email']}\n\n{$d['message']}";
$sent = @mail($mail['to'], $mail['subject_prefix'].$d['subject'], $body, $headers);
if ($sent) { unset($_SESSION['csrf']); back(true,'Message sent. I will reply to you soon.'); }
back(false,'The server could not send your message because mail is not configured. Please email '.$site['email'].' directly.',[],$d);
