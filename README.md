<div align="center">

# 🔨 CrudForge

**Zero-dependency PHP CRUD Generator — CLI-powered, fast, and clean.**

[![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)](LICENSE)
[![Zero Dependencies](https://img.shields.io/badge/dependencies-zero-brightgreen?style=flat-square)](composer.json)

[English](#english) · [فارسی](#فارسی)

</div>

---

<a name="english"></a>

## 🇬🇧 English

### What is CrudForge?

CrudForge is a lightweight, zero-dependency command-line tool that **automatically generates pure PHP CRUD files** for your entities. No frameworks, no bloat — just clean, ready-to-use PHP code, generated in seconds.

### ✨ Features

- ⚡ Zero external dependencies
- 🖥️ Simple and intuitive CLI interface
- 📁 Generates clean, pure PHP CRUD files
- 🗂️ Organized output in the `generated/` directory
- 🔧 Easy to extend and customize

### 📋 Requirements

- PHP **8.0** or higher
- Composer (for autoloading)

### 🚀 Installation

**Clone the repository:**

```bash
git clone https://github.com/Mahdyaralipor/crudforge.git
cd crudforge
```

**Install dependencies (autoloader only):**

```bash
composer install
```

### 💻 Usage

Run the CLI tool from the project root:

```bash
php bin/crudforge <EntityName>
```

**Example:**

```bash
php bin/crudforge User
php bin/crudforge Product
php bin/crudforge BlogPost
```

After running the command, your generated files will be placed inside the `generated/` directory.

### 📁 Project Structure

```
crudforge/
├── bin/
│   └── crudforge          # CLI entry point
├── src/
│   └── ...                # Core generator logic
├── generated/             # Output directory for generated files
├── vendor/                # Composer autoloader
├── composer.json
└── README.md
```

### 📄 Generated Output

For each entity, CrudForge generates pure PHP files covering:

- **Create** — insert new records
- **Read** — fetch and list records
- **Update** — modify existing records
- **Delete** — remove records

### 🤝 Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

1. Fork the project
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

### 📝 License

This project is licensed under the **MIT License**.

---

<a name="فارسی"></a>

## 🇮🇷 فارسی

### CrudForge چیست؟

CrudForge یک ابزار خط فرمان (CLI) سبک و **بدون نیاز به وابستگی خارجی** است که به صورت خودکار **فایل‌های PHP خالص CRUD** را برای موجودیت‌های شما تولید می‌کند. بدون فریم‌ورک، بدون پیچیدگی اضافه — فقط کد PHP تمیز و آماده استفاده، در چند ثانیه.

### ✨ ویژگی‌ها

- ⚡ بدون هیچ وابستگی خارجی
- 🖥️ رابط خط فرمان ساده و کاربردی
- 📁 تولید فایل‌های PHP خالص و تمیز
- 🗂️ خروجی سازمان‌یافته در پوشه `generated/`
- 🔧 قابل توسعه و شخصی‌سازی آسان

### 📋 پیش‌نیازها

- PHP نسخه **8.0** یا بالاتر
- Composer (برای autoloading)

### 🚀 نصب

**کلون کردن پروژه:**

```bash
git clone https://github.com/Mahdyaralipor/crudforge.git
cd crudforge
```

**نصب وابستگی‌ها (فقط autoloader):**

```bash
composer install
```

### 💻 نحوه استفاده

ابزار CLI را از ریشه پروژه اجرا کنید:

```bash
php bin/crudforge <نام‌موجودیت>
```

**مثال:**

```bash
php bin/crudforge User
php bin/crudforge Product
php bin/crudforge BlogPost
```

پس از اجرای دستور، فایل‌های تولیدشده در پوشه `generated/` قرار می‌گیرند.

### 📁 ساختار پروژه

```
crudforge/
├── bin/
│   └── crudforge          # نقطه ورودی CLI
├── src/
│   └── ...                # منطق اصلی generator
├── generated/             # پوشه خروجی فایل‌های تولیدشده
├── vendor/                # Composer autoloader
├── composer.json
└── README.md
```

### 📄 خروجی تولیدشده

برای هر موجودیت، CrudForge فایل‌های PHP خالص را برای عملیات زیر تولید می‌کند:

- **ایجاد (Create)** — درج رکورد جدید
- **خواندن (Read)** — دریافت و نمایش رکوردها
- **ویرایش (Update)** — تغییر رکوردهای موجود
- **حذف (Delete)** — پاک کردن رکوردها

### 🤝 مشارکت در پروژه

از مشارکت شما استقبال می‌کنیم! می‌توانید Issue باز کنید یا Pull Request ارسال کنید.

1. پروژه را Fork کنید
2. برنچ خود را بسازید: `git checkout -b feature/ویژگی-جدید`
3. تغییرات را Commit کنید: `git commit -m 'افزودن ویژگی جدید'`
4. به برنچ Push کنید: `git push origin feature/ویژگی-جدید`
5. یک Pull Request باز کنید

### 📝 لایسنس

این پروژه تحت **لایسنس MIT** منتشر شده است.

---

<div align="center">
  Made with ❤️ by <a href="https://github.com/Mahdyaralipor">Mahdyaralipor</a>
</div>