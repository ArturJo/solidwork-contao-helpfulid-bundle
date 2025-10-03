# Solidwork Contao Helpful ID Bundle

A small but useful **Contao bundle** that makes working with content elements, modules and articles easier by displaying their **internal IDs** directly in the backend.  
Especially helpful for developers and editors who frequently need to reference IDs when building templates or debugging.

---

## ✨ Features

- Displays the **ID of articles, content elements and modules** in the Contao backend.  
- Saves time when working with templates and database relations.  
- Helps developers and editors quickly identify elements.  
- Works out-of-the-box with no configuration required.

---

## ⚡ Installation

Install the bundle via **Composer**:

```bash
composer require solidwork/contao-helpfulid-bundle
```

Then run the Contao migration command:

```bash
vendor/bin/contao-console contao:migrate
```

---

## 🔧 Usage

Once installed, the IDs are automatically shown in the backend list views for:  

- Articles (`tl_article`)  
- Content elements (`tl_content`)  
- Modules (`tl_module`)  

No additional configuration is needed.

---

## 📦 Compatibility

- **Contao**: `^4.13` and `^5.3`  
- **PHP**: `^8.1` or higher  

---

## 🐞 Issues & Improvements

If you discover a bug or have a feature request, please open an [issue](https://github.com/ArturJo/solidwork-contao-helpfulid-bundle/issues).

---

## 🙏 Dank

Ein besonderer Dank geht an [Christian Feneberg](https://contao-academy.de/), den Gründer der Contao Academy, für seine Inspiration und seinen Beitrag zur Contao-Community.  
Lesetipp: [Seiten-ID im Seitenbaum anzeigen](https://contao-academy.de/blog/seiten-id-im-seitenbaum-anzeigen)



