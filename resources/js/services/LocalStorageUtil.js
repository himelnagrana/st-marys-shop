const localStorageKey = 'StMaryShopAuth';
const localStorageMaxTtl = 604800000; // 7Days in milliseconds
const localStorageMinTtl = 900000; // 15m in milliseconds


function setItem(value, remember = false) {
    localStorage.removeItem(localStorageKey);

    const now = new Date();
    const item = {
      value: value,
      expiry: now.getTime() +  (remember ? localStorageMaxTtl : localStorageMinTtl)
    };
    localStorage.setItem(localStorageKey, JSON.stringify(item));
}

function getItem() {
  const itemStr = localStorage.getItem(localStorageKey);
  if (!itemStr) {
    return null;
  }

  const item = JSON.parse(itemStr);
  const now = new Date();

  if (now.getTime() > item.expiry) {
    localStorage.removeItem(localStorageKey);
    return null;
  }
  return item.value;
}

function clearStorage() {
  localStorage.removeItem(localStorageKey);
  localStorage.setItem(localStorageKey, JSON.stringify({}));
}

export default {
  setItem,
  getItem,
  clearStorage
};
