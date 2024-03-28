// On exporte cette constante via son nom et non pas par défaut (pas de default).
// On peut utiliser process.env pour récupérer des valeurs depuis le fichier .env (grâce à Parcel). Ici on récupère API_BASE_URL.
export const baseURL = process.env.API_BASE_URL;