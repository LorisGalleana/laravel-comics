---

# LARAVEL-COMICS

## Descrizione

**LARAVEL-COMICS** è un progetto basato su Laravel che simula un sito web dedicato ai fumetti, con una struttura di layout condivisa per tutte le pagine. Il progetto parte da un template sviluppato precedentemente in VueJs, ma questa volta viene implementato in Laravel. Il focus principale del progetto è la gestione del layout, la visualizzazione dinamica dei dati e l'uso di Sass per migliorare lo stile.

### Funzionalità

1. **Creazione del Layout Combinato**:
   - Creazione di un file di layout che include la struttura comune di tutte le pagine del sito, come i tag `head` e `body`.
   - Inclusione di due partials per l'header e il footer, utilizzando il motore di templating Blade di Laravel.
   
2. **Visualizzazione della Lista dei Fumetti**:
   - Creazione di una rotta che recupera la lista di tutti i fumetti da un file presente nella cartella `config` e la visualizza sulla pagina principale.
   
3. **Sass per la Stile**:
   - Utilizzo di Sass per la gestione e personalizzazione dello stile del sito, rendendo il layout visivamente accattivante.

4. **Pagine Istituzionali**:
   - Creazione di più pagine istituzionali (ad esempio, "Chi Siamo", "Contatti") che condividono lo stesso layout e che utilizzano l'header e il footer tramite i partials.

### Bonus

1. **Card Dinamiche**:
   - Importazione delle informazioni delle card da un file di configurazione e stampa dinamica dei fumetti in card.
   
2. **Menu Dinamico**:
   - Importazione dei dati del menu da un file di configurazione e stampa dinamica dei link. Il link della pagina attiva deve essere evidenziato per mostrare l'elemento attualmente selezionato.

### Struttura del Progetto

1. **resources/views/layouts/app.blade.php**: Layout di base che include header, footer e struttura principale della pagina.
2. **resources/views/comics.blade.php**: Pagina che visualizza la lista dei fumetti recuperati dal file di configurazione.
3. **config/comics.php**: File di configurazione contenente i dati relativi ai fumetti, che vengono utilizzati per popolare dinamicamente la lista.
4. **config/menu.php**: File di configurazione contenente i dati del menu, che vengono utilizzati per creare i link dinamici.

### Tecnologie utilizzate

- **Laravel 9**: Framework PHP utilizzato per la creazione del progetto.
- **Blade**: Motore di templating di Laravel per la gestione delle views.
- **Sass**: Preprocessore CSS utilizzato per migliorare la gestione dello stile.
- **PHP**: Linguaggio di programmazione utilizzato per la logica dell'applicazione.

---
