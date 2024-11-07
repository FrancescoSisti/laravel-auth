<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

# Portfolio Project Manager

Un'applicazione web professionale e moderna per la gestione completa del tuo portfolio progetti, realizzata con il potente framework Laravel.

## 🌟 Panoramica

Portfolio Project Manager è la soluzione ideale per sviluppatori e creativi che desiderano gestire e presentare i propri progetti in modo professionale. Con un'interfaccia intuitiva e funzionalità avanzate, questo strumento ti permette di mantenere organizzato il tuo lavoro e mostrarlo al mondo nel migliore dei modi.

## ✨ Funzionalità Principali

- 🔐 **Area Admin Protetta**
  - Sistema di autenticazione robusto e sicuro
  - Dashboard intuitiva per la gestione dei progetti
  - Controllo completo su tutti gli aspetti del portfolio

- 📝 **Gestione Progetti Completa**
  - Creazione e modifica progetti con editor ricco di funzionalità
  - Visualizzazione dettagliata dei progetti
  - Eliminazione sicura con conferma
  - Sistema di bozze per progetti in fase di sviluppo

- 🖼️ **Sistema Avanzato di Gestione Media**
  - Upload semplificato delle immagini
  - Ottimizzazione automatica delle immagini
  - Gestione della galleria progetti
  - Supporto per multiple immagini per progetto

- 📅 **Gestione Timeline Avanzata**
  - Tracciamento preciso delle date di inizio e fine progetto
  - Visualizzazione della durata dei progetti
  - Sistema di notifiche per le scadenze
  - Calendario integrato

- 🏷️ **Categorizzazione Intelligente**
  - Organizzazione progetti per categorie personalizzabili
  - Filtri avanzati per tipo di progetto
  - Tag system per una migliore organizzazione
  - Categorizzazione multipla per progetto

- 💻 **Gestione Stack Tecnologico**
  - Aggiunta illimitata di tecnologie per progetto
  - Badge colorati per le diverse tecnologie
  - Ricerca progetti per tecnologia
  - Statistiche sull'utilizzo delle tecnologie

- 📊 **Monitoraggio Stati e Progressi**
  - Stati progetto personalizzabili
  - Barra di avanzamento visuale
  - Timeline interattiva
  - Report e statistiche dettagliate

## 🛠️ Tecnologie Utilizzate

- **Framework Backend:** Laravel 10.x
- **Database:** MySQL 8.0
- **Frontend Framework:** Bootstrap 5.3
- **Autenticazione:** Laravel Breeze con supporto 2FA
- **Validazione:** Form Request Validation avanzata
- **Storage:** Laravel File Storage con supporto S3
- **Cache:** Redis
- **Queue System:** Laravel Horizon
- **Testing:** PHPUnit
- **CI/CD:** GitHub Actions

## 📋 Requisiti di Sistema

- PHP >= 8.1
- Composer 2.x
- MySQL >= 8.0
- Node.js >= 16.x
- NPM >= 8.x
- Redis (opzionale, per caching)
- SSL Certificate (raccomandato per produzione)

## 🚀 Installazione

1. Clona il repository
   ```bash
   git clone https://github.com/tuonome/portfolio-projects.git
   cd portfolio-projects
   ```

2. Installa le dipendenze PHP
   ```bash
   composer install
   ```

3. Installa le dipendenze JavaScript
   ```bash
   npm install
   npm run build
   ```

4. Configura il file di ambiente
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configura il database nel file .env
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio_projects
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Esegui le migrazioni del database
   ```bash
   php artisan migrate
   ```

7. Configura lo storage per i file
   ```bash
   php artisan storage:link
   ```

8. Avvia il server di sviluppo
   ```bash
   php artisan serve
   ```

9. Accedi all'applicazione
   - Visita http://localhost:8000 nel tuo browser
   - Registra un nuovo account amministratore
   - Inizia a gestire i tuoi progetti!

Note: Per l'ambiente di produzione, assicurati di:
- Configurare correttamente il web server (Apache/Nginx)
- Impostare le variabili d'ambiente appropriate
- Attivare HTTPS
- Configurare la cache e le code se necessario
