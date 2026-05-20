# arpitjain099.github.io

Personal website of Arpit Jain — independent builder working on SaaS in security and large-scale data, based in Tokyo.

Live at **[arpitjain.fyi](https://arpitjain.fyi)** (custom domain via Cloudflare → GitHub Pages).

## Pages

- `index.html` — home: builder narrative, featured build (invc.news), project log, background.
- `open-source.html` — merged PRs grouped by organisation (Kubernetes, NIST, Azure, mermaid-js, Metasploit, Vue, Splunk OCSF, and more).
- `media.html` — talks, panels and press mentions.
- `styles.css` — shared styles.

## Stack

Static HTML + CSS + a sprinkle of vanilla JS. No build step. Google Fonts (Instrument Serif, Barlow, JetBrains Mono) loaded via CDN.

## Local preview

Open `index.html` directly in a browser, or run any static server from this directory:

```bash
python3 -m http.server 8080
# then visit http://localhost:8080
```

## Deploy (GitHub Pages)

1. Push to the `main` branch of `arpitjain099/arpitjain099.github.io`.
2. Repo → Settings → Pages → Source: "Deploy from a branch", branch `main`, folder `/` (root).
3. The `CNAME` file in this repo points the site at `arpitjain.fyi`.

## Custom domain — Cloudflare DNS

In Cloudflare DNS for `arpitjain.fyi`, add the following records and set their **Proxy status to DNS only** (grey cloud, not orange) — GitHub Pages handles its own TLS and gets unhappy when proxied:

| Type  | Name | Content                  |
|-------|------|--------------------------|
| A     | @    | 185.199.108.153          |
| A     | @    | 185.199.109.153          |
| A     | @    | 185.199.110.153          |
| A     | @    | 185.199.111.153          |
| CNAME | www  | arpitjain099.github.io   |

Then in Cloudflare → SSL/TLS, set encryption mode to **Full**.

GitHub Pages will provision a Let's Encrypt cert automatically once DNS resolves (usually within a few minutes; can take up to 24h).

## License

Content © Arpit Jain. Code is MIT — feel free to learn from the markup.
