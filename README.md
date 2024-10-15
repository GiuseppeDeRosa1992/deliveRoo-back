# DeliveRoo Backend

## Descrizione del progetto

DeliveRoo è un'applicazione che semplifica la gestione delle consegne di cibo da ristoranti. Questo progetto è diviso in due parti principali: **Frontend** e **Backend**, che lavorano insieme per fornire un servizio completo e performante.
[Qui trovi il link della repository Front-end] (https://github.com/GiuseppeDeRosa1992/deliveRoo-front)
Ricorda che le due applicazioni lavorano insieme e quindi sarà necessario installare entrambe le repository.

## Tecnologie e librerie utilizzate Back-end
- **JavaScript**: Linguaggio di programmazione.
- **PHP**: Linguaggio di programmazione.
- **Laravel**: Framework per lo sviluppo e gestione lato server.
- **MySql**: Database relazionale SQL per la gestione dei dati.
- **Bootstrap**: Libreria per la gestione del css.
- **Mailtrap.io**: Piattaforma per la gestione delle mail.
- **Braintree**: Piattaforma per il pagamento.
- **Chart.Js**: Libreria per la gestione delle statistiche degli ordini.

## Requisiti di sistema

Prima di iniziare, assicurati di avere installato i seguenti strumenti:
- **DataBase MySql**
- **NPM**
- **PHP**
- **Composer**

## Installazione

Segui questi passaggi per configurare l'ambiente di sviluppo localmente:

1. Clona il repository:
   \`\`\`bash
   git clone https://github.com/GiuseppeDeRosa1992/deliveRoo-back
   \`\`\`

2. Installa le dipendenze del backend:
   \`\`\`bash
   npm install
   composer install
   \`\`\`

3. Genera la chiave per il progetto:
   \`\`\`bash
   php artisan key:generate
   \`\`\`

4. Crea un nuovo file `.env` e copia dentro tutto ciò che sta in `.env.example`:
   
5. Sostituisci la credenziali per il Database:
   # ToDo: Configurare la connessione al DB
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE= Il tuo Nome DB
    DB_USERNAME= Il tuo Username DB
    DB_PASSWORD= La tua Password DB

6. Sostituisci nel filesystem.php e nel .env il seguente comando da local a public:
    ### Filesystems.php: 
    'default' => env('FILESYSTEM_DISK', 'public'),
    ### .env:
    FILESYSTEM_DISK=public

7. Esegui questo comando per creare la cartella upload nella cartella public per la gestione delle immagini:
    \`\`\`bash
   php artisan storage:link
   \`\`\`

8. Aggiorna il .env per mailtrap.io:
    # MAILTRAP
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=25
    MAIL_USERNAME= La tua Username MT
    MAIL_PASSWORD= La tua Password MT
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"

<!-- 9. Esegui questo comando per le dipendenze di Braintree:
    \`\`\`bash
   composer require braintree/braintree_php
   \`\`\` -->

10. Aggiorna il .env per Braintree:
    # Braintree
    BRAINTREE_ENV=sandbox
    BRAINTREE_MERCHANT_ID= Il tuo MERCHANT_ID di Braintree
    BRAINTREE_PUBLIC_KEY= La tua PUBLIC_KEY di Braintree
    BRAINTREE_PRIVATE_KEY= La tua PRIVATE_KEY di Braintree

<!-- 11. Esegui questo comando per le dipendenze di Chart.Js:
    \`\`\`bash
   npm install chart.js
   \`\`\` -->

## Lancia Migration e Seeder

1. Esegui questo comando per le Migration e Seeder insieme per creare le tabelle e popolare il DataBase:
    \`\`\`bash
   php artisan migrate:fresh --seed
   \`\`\`

## Avvia il Server

1. Esegui i seguenti comandi da terminale:
    \`\`\`bash
   php artisan serve
   npm run dev
   \`\`\`