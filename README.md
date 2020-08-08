# Obsolete - ve_guestbook is not maintained anymore.

Migration to nitsan guestbook (without comments and remote_addr):

```SQL
INSERT INTO tx_nsguestbook_domain_model_nsguestbook (uid, pid, sys_language_uid, tstamp, crdate, cruser_id, deleted, hidden, name, email, website, city, message)
SELECT uid, pid, sys_language_uid, tstamp, crdate, cruser_id, deleted, hidden, CONCAT(firstname," ",surname), email, homepage, place, entry
FROM tx_veguestbook_entries
```
