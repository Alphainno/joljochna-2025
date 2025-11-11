# Deployment Guide - Joljochna Real Estate Website

## Database Backups Created ✅

Your database has been backed up successfully:

1. **SQLite Database Copy:** `database/database.sqlite.backup` (152 KB)
2. **SQL Dump File:** `database/database_backup_20251110_100757.sql` (10 KB)

---

## Pre-Deployment Checklist

### ✅ 1. Database Backups
- [x] SQLite database backup created
- [x] SQL dump file created
- [x] 19 tables with all data preserved

### ✅ 2. Environment Configuration

**Important .env Settings to Update for Production:**

```env
# Change to production
APP_ENV=production
APP_DEBUG=false

# Set your production URL
APP_URL=https://yourdomain.com

# Database (if switching from SQLite to MySQL)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
```

### ✅ 3. Security & Optimization

**Run these commands before deployment:**

```bash
# Clear all caches
php artisan optimize:clear

# Cache configurations for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Generate optimized autoloader
composer install --optimize-autoloader --no-dev

# Ensure storage is linked
php artisan storage:link
```

### ✅ 4. File Permissions (Linux/Hosting)

```bash
chmod -R 755 /path/to/your/project
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### ✅ 5. Security Checklist

- [ ] Change `APP_KEY` in production .env
- [ ] Set `APP_DEBUG=false`
- [ ] Remove development packages
- [ ] Update CORS settings if needed
- [ ] Set up SSL certificate (HTTPS)
- [ ] Configure secure session/cookie settings

---

## Database Tables Backed Up (19 Tables)

✅ **Content Tables:**
- `about_sections` (8 KB) - About page sections
- `hero_sliders` (4 KB) - Homepage hero sliders
- `our_projects` (4 KB) - Project listings
- `project_sections` (8 KB) - Project section content
- `social_media` (4 KB) - Social media posts
- `testimonials` (4 KB) - Customer testimonials
- `footer_settings` (4 KB) - Footer configuration
- `contact_form_fields` (4 KB) - Dynamic contact form

✅ **User & Auth Tables:**
- `users` (8 KB) - Admin users
- `password_reset_tokens` (8 KB)
- `personal_access_tokens` (16 KB)
- `sessions` (16 KB)

✅ **Business Tables:**
- `bookings` (4 KB) - Customer booking requests

✅ **System Tables:**
- `migrations` (4 KB) - Migration history
- `cache` (8 KB)
- `cache_locks` (8 KB)
- `jobs` (8 KB)
- `job_batches` (8 KB)
- `failed_jobs` (8 KB)

**Total Database Size: 136 KB**

---

## Deployment Steps

### Option A: SQLite Database (Current Setup)

1. **Upload entire project** to your hosting
2. **Copy the backup database:**
   ```bash
   cp database/database.sqlite.backup database/database.sqlite
   ```
3. **Set permissions:**
   ```bash
   chmod 664 database/database.sqlite
   chmod 775 database
   ```

### Option B: MySQL Database (Recommended for Production)

1. **Create MySQL database** on your hosting
2. **Update .env** with MySQL credentials
3. **Run migrations:**
   ```bash
   php artisan migrate:fresh
   ```
4. **Import data from SQL dump** or use seeders
5. **Verify data** in phpMyAdmin

---

## Files to Upload

### ✅ Include:
- `/app/` - Application code
- `/config/` - Configuration files
- `/database/` - Migrations and backups
- `/public/` - Public assets (CSS, JS, images)
- `/resources/` - Views and assets
- `/routes/` - Route definitions
- `/storage/app/public/` - Uploaded files
- `composer.json` & `composer.lock`
- `.env.example` (rename to .env on server)

### ❌ Exclude (Don't Upload):
- `/node_modules/`
- `/vendor/` (run composer install on server)
- `/.git/`
- `.env` (create new on server)
- `/storage/logs/*.log`
- `/bootstrap/cache/*` (will regenerate)

---

## Post-Deployment Commands

After uploading files to your hosting, run:

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev

# Set up environment
cp .env.example .env
# Edit .env with your production settings

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Link storage
php artisan storage:link

# Cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

---

## Hosting Requirements

### Minimum Requirements:
- **PHP:** 8.2 or higher
- **Database:** SQLite 3.x or MySQL 5.7+
- **Extensions Required:**
  - BCMath
  - Ctype
  - Fileinfo
  - JSON
  - Mbstring
  - OpenSSL
  - PDO
  - Tokenizer
  - XML
  - GD or Imagick (for image processing)

### Recommended Hosting Providers:
- **Shared:** Hostinger, Namecheap, SiteGround
- **VPS:** DigitalOcean, Vultr, Linode
- **Cloud:** AWS, Google Cloud, Azure
- **Laravel-specific:** Laravel Forge, Ploi

---

## Important Files Created

1. **database/database.sqlite.backup** - Full database backup (152 KB)
2. **database/database_backup_20251110_100757.sql** - SQL dump (10 KB)

### To Restore from Backup:
```bash
# SQLite
cp database/database.sqlite.backup database/database.sqlite

# Or from SQL dump
sqlite3 database/database.sqlite < database/database_backup_20251110_100757.sql
```

---

## Production .env Template

```env
APP_NAME="Joljochna Real Estate"
APP_ENV=production
APP_KEY=base64:YOUR_KEY_HERE
APP_DEBUG=false
APP_TIMEZONE=Asia/Dhaka
APP_URL=https://yourdomain.com

# Database - Update for your hosting
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Session & Cache
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=database

# Mail - Configure for contact forms
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

---

## Security Checklist Before Going Live

- [ ] Set `APP_DEBUG=false`
- [ ] Set `APP_ENV=production`
- [ ] Generate new `APP_KEY`
- [ ] Update `APP_URL` to your domain
- [ ] Configure SSL certificate (HTTPS)
- [ ] Set secure session cookies
- [ ] Configure CORS if needed
- [ ] Set up firewall rules
- [ ] Enable rate limiting
- [ ] Review file permissions
- [ ] Set up automated backups
- [ ] Configure error logging
- [ ] Test all forms and features

---

## Post-Launch Monitoring

### Check These After Deployment:
1. Homepage loads correctly
2. All images display properly
3. Contact forms work
4. Booking system functions
5. Admin login works
6. All sections editable from dashboard
7. Mobile responsiveness
8. Cross-browser compatibility

### Important URLs to Test:
- Homepage: `https://yourdomain.com`
- Admin Login: `https://yourdomain.com/login`
- Admin Dashboard: `https://yourdomain.com/admin`
- About Page: `https://yourdomain.com/about`
- Projects Page: `https://yourdomain.com/projects`

---

## Troubleshooting Common Issues

### Issue: 500 Internal Server Error
**Solution:**
```bash
php artisan optimize:clear
chmod -R 775 storage bootstrap/cache
```

### Issue: Images Not Loading
**Solution:**
```bash
php artisan storage:link
# Check .htaccess in public folder
```

### Issue: CSS/JS Not Loading
**Solution:**
- Check `APP_URL` in .env
- Clear browser cache
- Verify public folder as document root

### Issue: Database Connection Failed
**Solution:**
- Verify database credentials in .env
- Check database exists
- Test connection: `php artisan db:show`

---

## Quick Deployment Checklist

- [x] ✅ Database backed up
- [ ] Update .env for production
- [ ] Run `composer install --no-dev`
- [ ] Run `php artisan optimize`
- [ ] Upload files to hosting
- [ ] Set correct file permissions
- [ ] Configure domain/DNS
- [ ] Enable SSL/HTTPS
- [ ] Test all functionality
- [ ] Monitor error logs

---

## Support & Maintenance

### Regular Maintenance:
- **Daily:** Monitor logs for errors
- **Weekly:** Backup database
- **Monthly:** Update dependencies
- **Quarterly:** Security audit

### Backup Strategy:
1. Database: Daily automated backups
2. Files: Weekly full backups
3. Keep 3 versions minimum
4. Store offsite (cloud storage)

---

## Contact for Deployment Help

If you need assistance with:
- Hosting setup
- Domain configuration
- SSL certificate
- Database migration
- Performance optimization

Document your hosting details and any error messages you encounter.

---

## Date
November 10, 2025

## Summary
Your Joljochna Real Estate website is now ready for deployment with complete database backups created. Follow the deployment checklist above to ensure a smooth launch. All 19 database tables with current data have been preserved in both SQLite backup and SQL dump formats.

