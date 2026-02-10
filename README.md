# How to Test Email Attachments

I wanted to use just one tool to see attachments of emails instead of using mailpit.

## Setup

1. Clone laravel telescope with the changes (so we can symlink it)

```git clone git@github.com:monteiro/telescope.git```
```git checkout issue-440-attachments```

2. Clone this sample laravel project so we can symlink it with my fork

```git clone git@github.com:monteiro/telescope-add-attachments.git``` 

```bash
npm install
npm run build
```

3. Start the server:

```bash
composer run dev
```

## Verify

1. Visit `http://127.0.0.1:8000/send-test-mail` to send a test email
2. Visit `http://127.0.0.1:8000/telescope/mail` and check:
    - **List view** — the email shows a paperclip icon with "2" (attachment count)
    - **Detail view** — click the email and verify an "Attachments" section shows `invoice.pdf` (application/pdf) and `readme.txt` (text/plain) with their sizes
    - **Download** — click a filename to download it and verify the content matches

