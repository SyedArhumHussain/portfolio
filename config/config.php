<?php
/** Central site data + settings. Edit here; templates read from these arrays. */
session_start();
$site = [
  'name' => 'Syed Arhum Hussain', 'title' => 'AI/ML Engineer',
  'tagline' => 'AI/ML Engineer | Agentic AI | Voice AI',
  'description' => 'Syed Arhum Hussain is an AI/ML Engineer designing, building and scaling AI agents and voice-powered solutions.',
  // Replace assets/images/profile.jpg with your photo; the placeholder shows until then.
  'profile' => is_file(__DIR__.'/../assets/images/profile.jpg') ? 'assets/images/profile.jpg' : 'assets/images/profile-placeholder.svg',
  'email' => 'arhumhussain216@gmail.com',
  'social' => [
    'linkedin' => ['LinkedIn', 'https://www.linkedin.com/in/arhum-hussain/'],
    'x'        => ['X', 'https://x.com/ArhumHussain12'],
    'gmail'    => ['Gmail', 'mailto:arhumhussain216@gmail.com'],
  ],
  'nav' => ['home'=>'Home','about'=>'About','projects'=>'Projects','skills'=>'Skills','experience'=>'Experience','education'=>'Education','contact'=>"Let's Talk"],
];
// Mail settings (see README). mail() needs a configured MTA/SMTP in php.ini.
$mail = ['to' => $site['email'], 'from' => 'no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'localhost'), 'subject_prefix' => '[Portfolio] '];

// Leave a URL empty until you have the real link; the button then shows as unavailable.
$projects = [
 ['n'=>'01','cat'=>'Voice AI / Speech Classification','title'=>'HuMac AI - Automatic Machine Detection System','art'=>'amd',
  'desc'=>'An intelligent voice classification system that distinguishes between human and automated machine voices during incoming calls and routes them to the appropriate agent.',
  'points'=>['Human and machine voice classification','Real-time processing with sub-2-second latency','Intelligent call routing','Conversational voice agent integration using LiveKit'],
  'tags'=>['Voice AI','LiveKit','Real-time'],'view'=>'https://darkorchid-oryx-603426.hostingersite.com/','github'=>'https://github.com/SyedArhumHussain/AMD-Automatic-Machine-Detection-System'],
 ['n'=>'02','cat'=>'Healthcare AI / NLP','title'=>'CareShare: AI-Powered Medical Donation Platform','art'=>'care',
  'desc'=>'A bilingual healthcare platform connecting medicine and medical equipment donors with recipients through intelligent conversational assistance.',
  'points'=>['English and Urdu AI chatbot','Medicine donation and request management','OCR and image-based information extraction','AI-powered assistance for donors and recipients'],
  'tags'=>['NLP','OCR','Chatbot'],'view'=>'https://green-locust-531594.hostingersite.com/','github'=>'https://github.com/SyedArhumHussain/CareShare-AI'],
 ['n'=>'03','cat'=>'Generative AI / RAG','title'=>'Loriva AI - Voice Agent for Medical Clinics','art'=>'rag',
  'desc'=>'An intelligent AI-powered healthcare voice agent that automates patient calls, appointment booking, rescheduling, reminders, and no-show recovery for medical clinics using real-time speech processing and LLM-based conversational AI.',
  'points'=>['24/7 automated patient call answering and handling','AI-powered conversational appointment booking and rescheduling','Real-time speech-to-text and natural text-to-speech processing'],
  'tags'=>['LangChain','RAG','LangGraph','LiveKit'],'view'=>'https://sweet-slategray-hyena-67.hostingersite.com/','github'=>'https://github.com/SyedArhumHussain/Voice-Agent'],
];
$skills = [
 'Programming Languages'=>['Python','Go','JavaScript','SQL'],
 'AI & Agentic Frameworks'=>['LangChain','LangGraph','LangSmith','LiveKit','Hybrid RAG'],
 'AI Models & Speech APIs'=>['OpenAI Models & Embeddings','Anthropic Claude','Cartesia','AssemblyAI'],
 'Backend & Real-Time Systems'=>['FastAPI','Flask','Django','WebSockets','WebRTC','Node.js','Express.js'],
 'Vector & Relational Databases'=>['FAISS','Pinecone','PostgreSQL','Elasticsearch'],
 'Dashboards & Frontend'=>['React.js','Streamlit','Tailwind CSS','Kibana'],
 'DevOps & Cloud Deployment'=>['Docker','Kubernetes','Azure AI Foundry','Google Cloud Platform (GCP)'],
];
$experience = [
 ['org'=>'Arc Inventador','role'=>'AI/ML Engineer','when'=>'October 2025 – July 2026',
  'items'=>['Engineered an Automatic Machine Detection (AMD) system that classifies human and machine voices with sub-2-second latency to route calls seamlessly.','Engineered real-time conversational voice agents for front-desk and customer support services using LiveKit.'],
  'tags'=>['Voice AI','LiveKit','AMD']],
 ['org'=>'The Flash Reviews','role'=>'Machine Learning Engineer','when'=>'June 2024 – August 2025',
  'items'=>['Built intelligent customer support chatbots leveraging LangChain and RAG architectures to streamline query handling.','Engineered dynamic dashboards and reporting interfaces using Streamlit and React.js to visualize real-time system metrics and operational analytics.'],
  'tags'=>['LangChain','RAG','Streamlit','React.js']],
];
$education = [
 ['org'=>'DHA Suffa University','role'=>'Bachelor of Science in Computer Science','when'=>'September 2021 – October 2025','extra'=>'CGPA: 3.05'],
 ['org'=>'Highbrow College','role'=>'A Levels – Pre-Engineering','when'=>'August 2019 – August 2021','extra'=>''],
];

function e($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function icon($k){
  $p = [
   'linkedin'=>'<path d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9.75h4V21H3V9.75Zm6.5 0h3.8v1.6h.06c.53-1 1.82-2.06 3.75-2.06 4 0 4.75 2.63 4.75 6.05V21h-4v-5.1c0-1.22-.02-2.78-1.7-2.78s-1.96 1.32-1.96 2.69V21h-4V9.75Z"/>',
   'x'=>'<path d="M17.75 3h3.07l-6.7 7.66L22 21h-6.17l-4.83-6.32L5.47 21H2.4l7.17-8.2L2 3h6.33l4.37 5.78L17.75 3Zm-1.08 16.16h1.7L7.4 4.75H5.58l11.09 14.41Z"/>',
   'gmail'=>'<path d="M2 6.5A2.5 2.5 0 0 1 4.5 4h15A2.5 2.5 0 0 1 22 6.5v11a2.5 2.5 0 0 1-2.5 2.5h-15A2.5 2.5 0 0 1 2 17.5v-11Zm2.2-.3L12 12.1l7.8-5.9H4.2ZM20 8.1l-8 6-8-6V17.5c0 .28.22.5.5.5h15a.5.5 0 0 0 .5-.5V8.1Z"/>'];
  return '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true">'.$p[$k].'</svg>';
}
function socials($cls=''){
  global $site; $o='<ul class="socials '.$cls.'">';
  foreach($site['social'] as $k=>[$label,$url]){
    $ext = $k!=='gmail' ? ' target="_blank" rel="noopener noreferrer"' : '';
    $o.='<li><a href="'.e($url).'"'.$ext.' aria-label="'.e($label).'" data-tip="'.e($label).'">'.icon($k).'</a></li>';
  }
  return $o.'</ul>';
}
function arrow(){ return '<svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg>'; }
