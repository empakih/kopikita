import { execSync } from 'node:child_process';

if (process.env.VERCEL) {
    console.log('⚡ Vercel build detected: Using pre-compiled assets in public/build.');
    process.exit(0);
}

execSync('vite build', { stdio: 'inherit' });
