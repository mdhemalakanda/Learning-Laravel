---
paths:
  - README.md
---

# General

## Branch lesson workflow: NN-Topic branch + cumulative README
Each branch is one numbered lesson, named NN-Topic-Name with hyphens (e.g. 14-Migration, no spaces). README.md at the branch root is a CUMULATIVE "Branch-by-Branch Guide": start from the latest branch's README, then (1) add a row to the branch table, (2) add a TOC entry, (3) add a lesson section in the established format (Topic blockquote with New files / Modified / Official docs links, "Files in This Lesson" table, "The Concept", "The Code", "How It Works" mermaid flowchart, "Try It" table), (4) append the official Laravel docs link to References. Pull doc content from laravel.com/docs/<topic>. Code for the lesson may be a fresh Laravel app. Remote: git@github.com:mdhemalakanda/Learning-Laravel.git
