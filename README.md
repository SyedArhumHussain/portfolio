# Portfolio (PHP 8+)
Run locally: `cd portfolio && php -S localhost:8000` then open http://localhost:8000 (or copy the folder to XAMPP `htdocs/` and open http://localhost/portfolio/).
- Photo: save as `assets/images/profile.jpg` (auto-detected).
- Project links: fill `view` / `github` in `config/config.php`.
- Email: `mail()` needs a mail server. XAMPP: configure `sendmail_path` (e.g. Mercury/msmtp) or SMTP in php.ini. Production: use your host's mail or swap in PHPMailer with SMTP credentials in `config/config.php`. If mail is not configured, the form shows an honest error instead of faking success.
