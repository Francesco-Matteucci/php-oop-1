# Movie Database Project

## Descrizione
Questo progetto è un'applicazione web basata su PHP che gestisce un database di film utilizzando la programmazione orientata agli oggetti (OOP). Gli utenti possono visualizzare una lista di film con i relativi dettagli, tra cui il titolo, il regista, i generi, e gli attori principali. Le informazioni aggiuntive sui film sono disponibili tramite modali interattive.

## Funzionalità
- **Visualizzazione dei Film**: Una lista di film con informazioni come titolo, anno di uscita, e regista.
- **Modali Interattive**: Le informazioni sugli attori e la descrizione del film sono accessibili tramite modali, per una migliore esperienza utente.
- **Interfaccia Utente Accattivante**: Utilizzo di Bootstrap per uno stile moderno e responsive.

## Struttura del Progetto
```
.
├── classes
│   ├── Actor.php
│   ├── Description.php
│   ├── Director.php
│   ├── Genre.php
│   └── Movie.php
├── db.php
├── index.php
└── style.css
```
- **classes/**: Contiene le classi PHP per la gestione delle entità del progetto (Attore, Genere, Regista, Descrizione, Film).
- **db.php**: File per l'inizializzazione dei dati del progetto, inclusi i film, i generi, i registi e gli attori.
- **index.php**: File principale che gestisce la logica della visualizzazione e presenta l'interfaccia utente.
- **style.css**: File di stile personalizzato per migliorare l'aspetto grafico delle card dei film e delle modali.

## Requisiti
- **PHP** 7.4 o superiore
- **Server Web** (Ambiente locale come XAMPP/MAMP)
- **Bootstrap** per il layout e la UI (incluso tramite CDN)

## Installazione
1. **Clona** questo repository nel tuo ambiente locale:
    ```bash
    git clone php-oop-1
    ```
2. **Naviga** nella directory del progetto:
    ```bash
    cd Movie-Database-Project
    ```
3. **Avvia** il progetto su un server locale o utilizza un ambiente di sviluppo come MAMP per visualizzare `index.php` nel browser.

## Utilizzo
- Apri l'applicazione nel tuo browser.
- Visualizza la lista di film disponibili.
- Clicca sui pulsanti per visualizzare i dettagli degli attori e le descrizioni nei modali interattivi.

## Contribuire
Le contribuzioni sono benvenute! Se desideri contribuire, puoi fare un **fork** del progetto, creare una nuova branch, e inviare una **pull request** con le tue modifiche.

## Possibili Miglioramenti
- **Aggiunta di Funzionalità**: Ricerca per i film o filtri basati sui generi.
- **Gestione degli Errori**: Implementare una gestione degli errori migliorata per la visualizzazione dei dati.
- **Aggiunta di un Backend**: Integrare un database per persistere i dati e gestire un numero maggiore di film.

## Contatti
Per qualsiasi domanda o suggerimento, sentiti libero di contattarmi a [francescomatteucci31@gmail.com](mailto:francescomatteucci31@gmail.com).

